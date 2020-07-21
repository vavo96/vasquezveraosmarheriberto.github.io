<?php

namespace App\Http\Controllers;

use App\detalle_poliza;
use App\poliza;
use Illuminate\Http\Request;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class PolizaController extends Controller
{
    public function guardarPoliza()
    {
        $idPoliza=poliza::create([
            'encabezado'=>request('encabezado'),
            'fecha'=>request('fecha'),
            'periodo'=>request('periodo'),
            'ejercicio'=>request('ejercicio')
        ])->id;

        if (isset($idPoliza)) {
            detalle_poliza::create([
                'id_poliza'=>$idPoliza,
                'cuenta_contable'=>request('cuenta_contable'),
                'cargo'=>request('cargo'),
                'abono'=>request('abono')
            ]);
            return ['mensaje'=>'Todo correcto'];
        }else{
            return ['error'=>true];
        }
    }

    public function importExport()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ExportUsers, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new ImportUsers, request()->file('file'));

        return back();
    }

}
