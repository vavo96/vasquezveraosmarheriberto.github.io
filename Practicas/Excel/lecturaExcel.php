<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(TRUE);
$spreadsheet = $reader->load("DEPTO_MUNICIPIOS.xlsx");
$worksheet = $spreadsheet->getActiveSheet();
// Get the highest row and column numbers referenced in the worksheet
$highestRow = $worksheet->getHighestRow(); // e.g. 10
$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

try{

    $id=1;
    
    for ($row = 1; $row <= $highestRow; ++$row) {
        
        $idPais = utf8_encode($worksheet->getCellByColumnAndRow(1, $row)->getValue());
        $pais = utf8_encode($worksheet->getCellByColumnAndRow(2, $row)->getValue());
        $idEstado = utf8_encode($worksheet->getCellByColumnAndRow(3, $row)->getValue());
        $estado = utf8_encode($worksheet->getCellByColumnAndRow(4, $row)->getValue());
        $idMunicipio = utf8_encode($worksheet->getCellByColumnAndRow(5, $row)->getValue());
        $municipio = utf8_encode($worksheet->getCellByColumnAndRow(6, $row)->getValue());
       
        for($i=0;$i<3;$i++){       
           
            switch ($i) {
                case 0:
                    insert(utf8_encode($id), utf8_encode($idPais),1,utf8_encode($pais),"","", "", "", "", "");
                    
                    break;

                case 1:
                    insert(utf8_encode($id), utf8_encode($idEstado),2,utf8_encode($estado),($id-1),utf8_encode($pais), "", "", "", "");
                    
                    
                   break;

                case 2:
                    insert(utf8_encode($id), utf8_encode($idMunicipio),3,utf8_encode($municipio),($id-2),utf8_encode($pais),($id-1),utf8_encode($estado), "", "");
                    
                    
                    break;
            }
            $id++;
        }

    }
}catch(PDOException $e){
    echo "Error ". $e->getMessage();
}

function insert($id, $codigo, $nivel, $descripcion, $id_padre1, $descripcion_padre1, $id_padre2, $descripcion_padre2){
    $conexion = new PDO('mysql:host=localhost;dbname=entrevista', 'root', 'password');
    $sql='INSERT INTO catalogos(id, codigo, nivel, descripcion, id_padre1, descripcion_padre1, id_padre2, descripcion_padre2, id_padre3, descripcion_padre3)
    values(:id, :codigo, :nivel, :descripcion, :id_padre1, :descripcion_padre1, :id_padre2, :descripcion_padre2, :id_padre3, :descripcion_padre3)';
    $statement = $conexion->prepare($sql);
    $statement->execute(
        array(':id'=>$id, 
        ':codigo'=>$codigo, 
        ':nivel'=>$nivel, 
        ':descripcion'=>$descripcion, 
        ':id_padre1'=>$id_padre1, 
        ':descripcion_padre1'=>$descripcion_padre1, 
        ':id_padre2'=>$id_padre2, 
        ':descripcion_padre2'=>$descripcion_padre2, 
        ':id_padre3'=>"", 
        ':descripcion_padre3'=>"")
    );
}