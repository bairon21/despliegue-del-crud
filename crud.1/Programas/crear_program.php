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
                 
                            <strong class="lgris">Ingrese los datos del programa</strong>
                            <br>

                             <form id="formulario" role="form" method="post" action="guardar_program.php">
                             
                   <br>
                 <label class="lgris">Tipo de ID</label> 
				<select name="program_id" class="form-control" >
                <option value="0">Seleccione:</option>
                
                <br>
				<?php 
				require("connect_db.php");
				$query = $conexion -> query ("SELECT * FROM tiposprograma ");
				while ($valores = mysqli_fetch_array($query)) {
				  echo '<option value="'.$valores['tiposp_id'].'">'.$valores['tiposp_id'].'</option>';
                }
                
                ?>
                </select>
<br>

                            <label class="lgris">NOMBRE:</label>
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="Progra_Nombre" value="" placeholder="Nombre Del programa" required />
<br>
                            <label class="lgris">TIPO DE PROGRAMA:</label>
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="Progra_tipo" value="" placeholder="tipo de programa" required />
                            <br>
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