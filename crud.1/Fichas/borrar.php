<html>
 <head>
 <title>Consulta de Aprendices</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
 <link href="css/bootstrap.min.css" rel="stylesheet"/>
 <link href="style css/estilos.css" rel="stylesheet"/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="js/bootstrap.js"></script>
 </head>
 <body>
 <div id="divconsulta" class="container">
 <br>
 <div id="div2">
 <div id="div4" >
 <form name="guardar_apre.php" role="form" method="post">
 <div class="col-md-12">
 <strong class="lgris">Ingrese criterio de busqueda</strong>
 <br> <br>
 <div class="form-row">
 <div class="form-group col-md-3">
 <input class="form-control" type="number" name="palabra1" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" />
 </div>
<div class="form-group col-md-3">
 <input class="btn btn-primary" type="submit"
value="Consultar" >
 </div>
 </div>
 <br>
 </div>
 </form>
 <?php
    if(isset($_POST['palabra1'])){
        require_once "connect.php";
       
$palabra1=$_POST['palabra1'];
$query="SELECT * FROM fichas WHERE ficha_numero LIKE '%$palabra1%'";
$consulta3=consultarSQL($query);
if($consulta3->num_rows>=1){

    echo "	<table border='1'; class='table table-hover';>
    <thead>
        <tr bgcolor=#1493F1>
            <th>Numero de ficha</th>
            <th>Programa de ficha</th>
            <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>";

            while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){

                echo '<tr >
                    <td>'.$fila['ficha_numero'].'</td>
                    <td>'.$fila['ficha_progra'].'</td> ';    
                   echo "<td><a href='borrar.php?id=$fila[ficha_numero]&idborrar=2'><img src='IMAGENES/eliminar.png' class='img-rounded'/></a></td>";          
           echo "</tr>";
            }
            echo "</table>";
          } 
         }
         ?>  
         <?php 
         require_once "connect_db.php";
            extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM fichas WHERE ficha_numero=$id";
						$resborrar=mysqli_query($conexion,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='borrar.php'</script>";
					}

    
        ?>    
    
 <br>
 </div>
 </body>

</html>