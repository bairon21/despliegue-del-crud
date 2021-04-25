<?php 
session_start();
if (@!$_SESSION['usua_nomuser']) {
	header("Location:index.php");
}elseif ($_SESSION['usua_tipo']=='admin' ) {
	header("Location:menu.php");
}
?>
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