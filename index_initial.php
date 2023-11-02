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
        <form>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">Valor:</label>
                        <input type="number" name="valor" class="form-control" value="">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label for="desde" class="form-label">Desde:</label>
                    <select class="form-select">
                        <option value="">--Selecciona un valor--</option>
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>
                    </select>

                </div>
                
                <div class="col-sm-4">
                    <label for="desde" class="form-label">Hasta:</label>
                    <select class="form-select">
                        <option value="">--Selecciona un valor--</option>
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>
                    </select>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary w-100 py-4">CONVERTIR</button>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="resultado" class="form-label">RESULTADO:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>