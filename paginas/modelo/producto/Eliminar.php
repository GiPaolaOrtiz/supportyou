<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<?php
		$iddemo=$_GET['id'];
		echo "Edici&oacute;n en proeso .... <br>";

		include_once("categoriaproductoCollector.php");
		$DemoCollectorObj= new categoriaproductoCollector();
		$DemoCollectorObj-> deleteCategoriaPruducto($idcategoriaProducto);

		echo "id: ".$idcategoriaProducto . "eliminado <br>";
	?>
	<div>
		<a href="index.php">Volver al registro</a>
	</div>
</body>
</html>
