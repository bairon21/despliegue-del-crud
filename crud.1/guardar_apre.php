<?php

//conectamos Con el servidor
$host ="localhost";
$user ="root";
$pass ="";
$db="sena_bd";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db) or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
$id=$_POST['id'];
$tipoid=$_POST['tipoid'];
$numid=$_POST['numid'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$ficha=$_POST['ficha'];

$sql= "INSERT INTO aprendices VALUES('$id','$tipoid','$numid','$nombres','$apellidos','$direccion','$telefono','$ficha')";
$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
   echo"Hubo Algun Error";
  }else{
	 echo '<script>alert("SE HA REGISTRADO CORRECTAMENTE")</script> ';
	 echo "<script>location.href='registrar_apre.php'</script>";
   
  }
 ?>
 