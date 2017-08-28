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
			$id= $_GET['id'];
			echo "<h2 class='text-center'>El valor del id es: " . $id . " </h2>";

			include_once("DemoCollector.php");
			include_once("Demo.php");

			$DemoCollectorObj = new DemoCollector();
			$ObjDemo = $DemoCollectorObj->showDemo($id);
			//print_r($ObjDemo); //Ayudar a ver el contenido de una variable
		?>
		<br>
		<br>
		<br>
		<form class="form-signin" method="post" action="Actualizar.php">
		    <p class="text-center"><b>ID</b></p>
		    <input type="text" id="id_demo" class="form-control center-block" name="iddemo" 
		    value="<?php echo $ObjDemo->getIdDemo(); ?>" readonly>

		    <p class="text-center"><b>NOMBRE</b></p>
		    <input type="text" id="n" class="form-control center-block" name="nombre" 
		    value="<?php echo $ObjDemo->getNombre(); ?>">

		    <p class="text-center"><b>PASSWORD</b></p>
		    <input type="text" id="p" class="form-control center-block" name="password" 
		    value="<?php echo $ObjDemo->getPassword(); ?>">
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
