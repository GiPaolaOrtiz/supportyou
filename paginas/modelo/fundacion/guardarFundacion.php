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
    <title>Contactos</title>

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
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$actividad = $_POST['actividad'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$pass = $_POST['contraseña'];
$cuenta = $_POST['ncuenta'];
$ruc = $_POST['ruc'];



include_once("fundacionCollector.php");

$FundacionCollectorObj = new fundacionCollector();
$FundacionCollectorObj->createFundacion($actividad,$direccion,$email,$pass,$ruc,$pais,$categoria,$ciudad,$cuenta,$telefono,$nombre);

?>


</div>

<div class="col-md-12" id="divCentral">

<div class="col-md-4">

<?php
echo 'Gracias por registrar su fundación ' . htmlspecialchars($nombre) . '!';
?>



                <form action="loginFundacion.php" class="form-signin" method="post">
                    <h2 class="form-signin-heading">Inicia Sesión</h2>
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Recuérdame
                        </label>
                    </div>
                    <button id="boton2" class="btn btn-lg btn-primary btn-block" type="submit"><a href="PerfilFundacion.php">Iniciar Sesion</a></button>

                </form>

            </div>

<div class="col-md-4">

<img alt="Organizaciones" id="estilo" src="../../../img/organizaciones.png">

</div>

</div>

</body>
</html>