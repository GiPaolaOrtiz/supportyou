<?php
  session_start();
?>

<?php

$categoria=$_POST["categoria"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];
$id_producto=$_POST["id_producto"];

echo "Edicion en proceso... </br>";

include_once("../../modelo/producto/ProductoCollector.php");

$ProductoCollectorObj = new ProductoCollector();
$ProductoCollectorObj->updateProducto($id_producto,$descripcion,$precio,$categoria);

echo "id : ".$id_producto. " actualizado </br>";
?>

<div><a href="MiPerfil.php"> Mi Perfil </a></div>
</div>

</body>
</html>
