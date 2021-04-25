<?php

//conectamos Con el servidor
$host ="localhost";
$user ="root";
$pass ="";
$db="sena_bd";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db) or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

$id=$_POST['program_id'];
$tipoid=$_POST['Progra_Nombre'];
$nombres=$_POST['Progra_tipo'];


$sql= "INSERT INTO programa VALUES('$id','$tipoid','$nombres')";
$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
   echo"Hubo Algun Error";
  }else{
	 echo '<script>alert("SE HA REGISTRADO CORRECTAMENTE")</script> ';
	 echo "<script>location.href='crear_program.php'</script>";
   
  }
 ?>