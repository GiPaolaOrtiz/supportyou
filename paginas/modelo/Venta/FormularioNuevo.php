<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>	
		<?php 			
			include_once("DemoCollector.php");
			include_once("Demo.php");

			$DemoCollectorObj = new DemoCollector();
		?>	
		<h2 class="text-center">Agrega nuevo usuario</h1>
		<br>
		<br>
		<br>
		<form class="form-signin" method="post" action="Agregar.php">
		    <p class="text-center"><b>NOMBRE</b></p>
		    <input type="text" id="n" class="form-control center-block" name="nombre">

		    <p class="text-center"><b>PASSWORD</b></p>
		    <input type="text" id="p" class="form-control center-block" name="password">
		    <br>
		    <button class="center-block btn btn-lg btn-primary btn-block" type="submit">SAVE</button>
		</form>

		<div>
			<a href="index.php">Volver al inicio</a>
		</div>
		<style type="text/css">
			input[type=text]{
				/*margin-left: 5%;*/
				width: 40%;
			}
			.btn{
				width: 10%;
			}

		</style>			
	</body>
</html>
