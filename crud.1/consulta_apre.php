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
 <strong class="lgris">INGRESE SU BUSQUEDA</strong>
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
$query="SELECT * FROM aprendices WHERE numid LIKE '%$palabra1%'";
$consulta3=consultarSQL($query);
if($consulta3->num_rows>=1){

    echo "	<table border='1'; class='table table-hover';>
    <thead>
        <tr bgcolor=#1493F1>
            <th>Id</th>
            <th>Tipo Id</th>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Ficha</th>
            </tr>
            </thead>
            <tbody>";

            while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){

                echo '<tr >
                <td>'.$fila['id'].'</td>
                  <td>'.$fila['tipoid'].'</td>
                    <td>'.$fila['numid'].'</td>
                    <td>'.$fila['nombres'].'</td>
                    <td>'.$fila['apellidos'].'</td>
                    <td>'.$fila['direccion'].'</td>
                    <td>'.$fila['telefono'].'</td>
                    <td>'.$fila['ficha'].'</td>                  
            </tr>';
            }
            echo "</tbody>
            </table>";
        }
        else{
            echo "No hemos encontrado ningun registro con la palabra " .$palabra1;
        }
    }
        ?>    
    
 <br>
 </div>
 </body>

</html>