<!doctype html>
<?php
$palabra1=$_POST['palabra1'];
$query="SELECT * FROM aprendices WHERE numid LIKE '%$palabra1%'";
$consulta3=consultarSQL($query);
if($consulta3->num_rows>=1){

    echo "	<table border='1'; class='table table-hover';>
    <thead>
        <tr bgcolor=#1493F1>
            <th> Id</th>
            <th>Tipo Id</th>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Ficha</th>
            <th>Actualizar</th>
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
                  <td>'.$fila['ficha'].'</td> ';    
                  echo "<td><a href='actualizar_apre_1.php?id=$fila[id]'><img src='IMAGENES/actualizar.gif' class='img-rounded'></td>";          
         echo "</tr>";
          }
          echo "</table>";
        } 
    else{
            echo "No hemos encontrado ningun registro con la palabra " .$palabra1;
        }
        ?>    
        
   