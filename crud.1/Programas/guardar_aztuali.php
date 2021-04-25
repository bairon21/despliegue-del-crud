<?php
$id=$_REQUEST['Progra_id'];
$nombre=$_POST['Progra_Nombre'];
$tipo=$_POST['Progra_Tipo'];

require("connect_db.php");	//extraer todos los valores del metodo post del formulario de actualizar
$sql="update programa set Progra_Nombre='$nombre', Progra_Tipo='$tipo' Progra_id='$id' ";
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$resent=mysqli_query($conexion,$sql);
if($resent==null){
   echo"Hubo Algun Error";
  }else{
    echo '<script>alert("SE HA REGISTRADO CORRECTAMENTE")</script> ';
    echo "<script>location.href='guardar_aztua.php'</script>";
	 
   
  }
 ?>