<?php
  session_start();
?>

<?php
$descripcion=$_POST["descripcion"];
$estado=$_POST["estado"];
$precio=$_POST["precio"];
$fundacion=$_POST["fundacion"];
$categoria=$_POST["categoria"];
$id_producto=$_POST["id_producto"];

echo "Edicion en proceso... </br>";

include_once("collectorPerfil.php");

$ProductoCollectorObj = new collectorPerfil();
$ProductoCollectorObj->updateProducto($id_producto,$descripcion,$estado,$precio,$fundacion,$categoria);

echo "id : ".$id_producto. " actualizado </br>";
?>

<div><a href="MiPerfil.php"> Mi Perfil </a></div>
</div>

</body>
</html>
