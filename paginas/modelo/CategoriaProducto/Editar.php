<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<?php
		$nombre=$_POST['nombre'];
		$iddemo=$_POST['iddemo'];
		echo "Edici&oacute;n en proeso .... <br>";

		include_once("DemoCollector.php");
		$DemoCollectorObj= new DemoCollector();
		$DemoCollectorObj-> updateDemo($iddemo,$nombre);

		echo "id: ".$iddemo . "actualizando a:" . $nombre . "<br>";
	?>
	<div>
		<a href="index.php">Volver al inicio</a>
	</div>
</body>
</html>