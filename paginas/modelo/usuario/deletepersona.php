<html>

<body>
<div id="main">

<?php
$iddemo=$_GET["id"];

echo "Edicion en proceso ....  </br>";

include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj ->deleteDemo($iddemo);

echo "Se ha eliminado el id: " . $iddemo . " </br>";
?>

<div><a href="index.php">Volver al inicio</a></div>

</div>

</body>
</html>
