<?php


$valor="";
$desde= "";
$hasta="";

//Convertimos a la medida standar sería metros
function convertir_a_metros( $valor, $unidad_desde) {
    switch( $unidad_desde ) {
        case "Milimetro":
            return $valor/1000;
         
        case "Centimetro":
            return $valor/100;
         
        case "Decimetro":
            return $valor/10;
         
        case "Metro":
            return $valor/1;
         
        case "Decametro":
            return $valor*10;
         
        case "Hectometro":
                return $valor*100;
         
        case "Kilometro":
            return $valor*1000;
         
        default:
            return 'Unidad de medida no soportada';
         
        }
}

function convertir_desde_metros( $valor, $unidad_desde) {
    switch( $unidad_desde ) {
        case "Milimetro":
            return $valor*1000;
         
        case "Centimetro":
            return $valor*100;
         
        case "Decimetro":
            return $valor*10;
         
        case "Metro":
            return $valor*1;
         
        case "Decametro":
            return $valor/10;
         
        case "Hectometro":
                return $valor/100;
         
        case "Kilometro":
            return $valor/1000;
         
        default:
            return 'Unidad de medida no soportada';
         
        }
}

if( isset( $_POST['convertir'] )){
    //Obtener los valores
    $valor= $_POST['valor'];
    $desde= $_POST['desde'];
    $hasta= $_POST['hasta'];
    

    $calculoDesde = convertir_a_metros( $valor, $desde );
    $calcularHasta = convertir_desde_metros( $calculoDesde, $hasta );

    $resultado = $calcularHasta;

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Unidades</title>
</head>
<body>
    <h1 class="text-center">Conversor de Longitud</h1>

    <div class="container">
        <form method="POST">
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">Valor:</label>
                        <input type="number" name="valor" class="form-control" value="">
                    </div>
                </div>

            <div class="col-sm-4">
                <label for="desde" class="form-label">Desde:</label>
                <select class="form-select" name="desde">
                    <option value="">--Selecciona un valor--</option>
                    <option value="Milimetro">Milimetro</option>
                    <option value="Centimetro">Centimetro</option>
                    <option value="Decimetro">Decimetro</option>
                    <option value="Metro">Metro</option>
                    <option value="Decametro">Decametro</option>
                    <option value="Hectometro">Hectometro</option>
                    <option value="Kilometro">Kilometro</option>
                </select>
            </div>

            <div class="col-sm-4">
                <label for="hasta" class="form-label">Hasta:</label>
                <select class="form-select" name="hasta">
                    <option value="">--Selecciona un valor--</option>
                    <option value="Milimetro">Milimetro</option>
                    <option value="Centimetro">Centimetro</option>
                    <option value="Decimetro">Decimetro</option>
                    <option value="Metro">Metro</option>
                    <option value="Decametro">Decametro</option>
                    <option value="Hectometro">Hectometro</option>
                    <option value="Kilometro">Kilometro</option>
                </select>
            </div>


            </div>

            <div class="row mt-4">
                <div class="col-sm-6">
                    <button type="submit" name="convertir" class="btn btn-primary w-100 py-4">CONVERTIR</button>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="resultado" class="form-label">RESULTADO:</label>
                        <input type="text" name="resultado" class="form-control" value="<?php if(isset($resultado)) echo $resultado ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>