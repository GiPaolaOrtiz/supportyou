<?php
  session_start();
?>


<?php

$id=$_GET["id"];

include_once("../../modelo/producto/ProductoCollector.php");

$ProductoCollectorObj = new ProductoCollector();
$ProductoCollectorObj->deleteProducto($id);

echo "Se ha eliminado id : ".$id. " </br>";
?>

<div><a href="MiPerfil.php"> Volver al inicio </a></div>
</div>

</body>
</html>