<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Categorías de Fundación</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/portfolio-item.css" rel="stylesheet">
    <link href="../../../css/estiloFundacionLogin.css" rel="stylesheet">
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="../../../js/main.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../fundacion/PerfilFundacion.php"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>
    </nav>


<div id="main">

<?php
$id= "1";
include_once("../../modelo/producto/ProductoCollector.php");
include_once("../../modelo/producto/Producto.php");
$ProductoCollectorObj = new ProductoCollector();
$ObjProducto = $ProductoCollectorObj->showProducto($id);

?>

<h2>Editar objeto </h2>

<form action="actualizarObjeto.php" method="post">

<p>
Id: <input type="text" name="id_producto" value="<?php echo $ObjProducto->getIdProducto(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="descripcion" value="<?php echo $ObjProducto->getDescripcion(); ?>" autofocus required />
</p>

<p>
Precio: <input type="text" name="precio" value="<?php echo $ObjProducto->getPrecio(); ?>" />
</p>

<p>
Categoría: <input type="text" name="categoria" value="<?php echo $ObjProducto->getIdcategoriaproducto(); ?>" />
</p>

<a href="MiPerfil.php">  Cancelar</a>
<input type="submit" class="btn btn-info center-block" value="Guardar" />

</form>

</div>
</div>
</nav>


</body>
</html>

