<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="style css/estilos1.css" rel="stylesheet" />
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
<div id="div1" class="container">  
<br>
        <div id="div2">
        <div id="div3">

                        <div class="col-md-12">
                 
                            <strong class="lgris">Ingrese los datos del aprendiz</strong>
                            <br>

                             <form id="formulario" role="form" method="post" action="guardar_apre.php">
                             <label class="lgris">ID:</label>
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="id" value="" placeholder="id" />
                            <br>
                            <label class="lgris">Identificacion:</label>
                            <div class="form-row">
                            <br>
                                <div class="form-group col-xs-2">
                                    <select class="form-control" name="tipoid">
                                        <option value="CC" selected>TIPO</option>
                                        <option value="TI">CC</option>
                                        <option value="RC">TI</option>
                                        <option value="PEP">PS</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" required />
                                </div>
                            </div>
                            <label class="lgris">Nombres:</label>
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required />
                            <br>
                            <label class="lgris">Apellidos:</label>
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required />
                            <br>
                            <label class="lgris">Dirección:</label>
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="" placeholder="DIRECCIÓN" required />
                            <br>
                            <label class="lgris">Teléfono:</label>
                            <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="TELÉFONO" required />
                            <br>
                            <label class="lgris">Ficha:</label>
                            <input class="form-control" type="number" name="ficha" min="9999" max="9999999999999" value="" placeholder="FICHA" required />
                            <br>
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    </form>
                <br>
            </div>
        </div>
    </div>
</body>
</html>