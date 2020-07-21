<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


    <title>Poliza</title>
</head>
<body>
<div class="container">
    <div class="col-8 mt-2">
        <div class="form-row">

        @csrf
            <div class="form-group col-md-6">
              <label for="Encabezado">Encabezado: </label>
              <input type="text" class="form-control" id="Encabezado" name="Encabezado" placeholder="Encabezado"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="Fecha">Fecha: </label>

              <input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha"  required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="cuenta_contable">Cuenta Contable</label>
                  <input type="text" class="form-control" id="cuenta_contable">
                </div>
                <div class="form-group col-md-4">
                  <label for="cargo">cargo</label>
                  <input type="text" class="form-control" id="cargo" name="cargo" placeholder="cargo"  required>
                </div>
                <div class="form-group col-md-2">
                    <label for="abono">abono</label>
                    <input type="text" class="form-control" id="abono" name="abono" placeholder="abono"  required>
                </div>
              </div>

              <button id="guardar" type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.0.3.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $("#guardar").click(function(){

            var fecha = new Date($("#Fecha").val());
            var encabezado =$("#Encabezado").val();
            var periodo=fecha.getMonth()+1;
            var ejercicio=fecha.getFullYear();
            var cuenta_contable=$("#cuenta_contable").val();
            var cargo= $("#cargo").val();
            var abono=$("#abono").val();

            $.ajax({
                type: "POST",
                url: "/guardarPoliza",
                data: {
                    "_token": "{{ csrf_token() }}",
                    encabezado: encabezado,
                    fecha: $("#Fecha").val(),
                    periodo: periodo,
                    ejercicio: ejercicio,
                    cuenta_contable: cuenta_contable,
                    cargo: cargo,
                    abono: abono
                },
                success: function(answ){
                      var datos = JSON.parse(answ);
                    }
            })
        });
    });
</script>
</html>
