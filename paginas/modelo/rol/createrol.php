<?php
  session_start();
?>


<!DOCTYPE HTML>


  <body>

<header>
<nav>

</nav>
	
</header>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP

$id=$_GET["id"];
echo "valor de id es ". $id;

include_once('DemoCollector.php');
include_once('Rol.php');

$DemoCollectorObj= new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Editar Objeto Demo</h2>


<form action="actualizar.php" method="post">
  	<p>
  
    Id:<input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>" 
    readonly />
    </p>

    

    <p>
    Nombre:<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" 
    autofocus required />

    <br><br>
    <a href="index.php"> Cancelar </a>
    <br><br>
    <input type="submit" value="Guardar" />

    </p>
    
</form>

</body>