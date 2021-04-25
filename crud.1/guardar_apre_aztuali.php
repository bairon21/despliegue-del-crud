<?php
$id=$_REQUEST['id'];
$docu=$_POST['numid'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$ficha=$_POST['ficha'];

require("connect_db.php");	//extraer todos los valores del metodo post del formulario de actualizar
$sql="update aprendices set numid='$docu', nombres='$nombres', apellidos='$apellidos', direccion='$direccion', telefono='$telefono', ficha='$ficha' where id='$id' ";
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$resent=mysqli_query($conexion,$sql);
if($resent==null){
   echo"Hubo Algun Error";
  }else{
    echo '<script>alert("SE HA REGISTRADO CORRECTAMENTE")</script> ';
    echo "<script>location.href='menu.php'</script>";
	 
   
  }
 ?>
 