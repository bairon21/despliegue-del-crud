<!DOCTYPE html><?php 
session_start();
require("connect_db.php");
?>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		
		<ul class="nav pull-right">
				<li>Bienvenido <strong><?php echo $_SESSION['usua_tipo'];?></strong> </a></li>
			  	 
		</ul>
		<a href="desconectar.php"> Cerrar Cesión </a>	
	  </div>
	</div>
  </div>
</div>
</html>
