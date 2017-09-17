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
			include_once("ProductoCollector.php");
			include_once("Producto.php");

			$ProductoCollectorObj = new ProductoCollector();
		?>	
		<h2 class="text-center">Agrega nuevo Producto</h2>
		<br>
		<br>
		<br>
		<form class="form-signin" method="post" action="Agregar.php">
		    <p class="text-center"><b>ID CATEGORIA PRODUCTO</b></p>
		    <input type="text" id="catpro" class="form-control center-block" name="idcategoriaproducto">

		    <p class="text-center"><b>ID FUNDACION </b></p>
		    <input type="text" id="idfun" class="form-control center-block" name="idfundacion">
		    <p class="text-center"><b>DESCRIPCION</b></p>
		    <input type="text" id="des" class="form-control center-block" name="descripcion">

		    <p class="text-center"><b>ESTADO </b></p>
		    <input type="text" id="estado" class="form-control center-block" name="estado">

		    <p class="text-center"><b> PRECIO </b></p>
		    <input type="text" id="preci" class="form-control center-block" name="precio">

		    <p class="text-center"><b>IMAGEN </b></p>
		    <input type="file" id="imagen" class="form-control center-block" name="img">

		    <p class="text-center"><b>ESTADO DE VENTA </b></p>
		    <select id="estven" name="estadoventa" method="post" class="form-control center-block" required>
                 <option value="disponible">disponible</option>
                 <option value="disponible">vendido</option>
            </select>
		    <br>
		    <button class="center-block btn btn-lg btn-primary btn-block" type="submit">SAVE</button>
		</form>

		<div>
			<a href="index.php">Volver al inicio...</a>
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
