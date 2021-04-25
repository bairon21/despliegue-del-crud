<?php 
session_start();
if($_SESSION['usua_nomuser']){	
	session_destroy();
	header("location:index.php");
}
else{
	
	header("location:index.php");
}
?>