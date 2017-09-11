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

    <title>Support You</title>

    <!-- Bootstrap Core CSS -->
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- Bootstrap Core CSS -->
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>
     <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                        echo"<a href='../index.php'><img alt='LogoAplicacion' id='estilo_logo' src='../img/LogoSupportYou.png'></a>"
                  ?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <?php
                        echo"<a class='page-scroll' href='logout.php'>SALIR</a>"
                        ?>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container -->

    </nav>
      <div id="logout">
    <br> <br><br> <br> <br> <br> <br> <br> <br> <br> 
    
    <?php
    //AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
    $conex = "host=localhost port=5432 dbname=supportyou user=postgres password=postgres";
    $cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
  

    function quitar($mensaje)
    {
        $nopermitidos = array("'",'\\','<','>',"\"");
        $mensaje = str_replace($nopermitidos, "", $mensaje);
        return $mensaje;
    }
    if(trim($_POST["username"]) != "" && trim($_POST["pass"]) != "")
    {
    // Puedes utilizar la funcion para eliminar algun caracter en especifico
    //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
    //$password = $HTTP_POST_VARS["password"];
    // o puedes convertir los a su entidad HTML aplicable con htmlentities
    $usuario = strtolower(htmlentities($_POST["username"], ENT_QUOTES));
    $password = $_POST["pass"];
    
    $result = pg_query('SELECT password, username , idrol FROM usuario WHERE username=\''.$usuario.'\'');
    if($row = pg_fetch_array($result)){
    if($row["password"] == $password){
    
      
      
   $_SESSION["MiSesion"] = $row['username'];
        echo '<h2>Has sido logueado correctamente '.$_SESSION['MiSesion'].' </h2>';
        echo "Usuario " . $usuario. " pass ". $password;
        echo '<br>';
        
        if($row["idrol"]==1)  {
            echo '<a href="administrador.php">Ir a Opciones de Administrador</a></p>';
        }
        if($row["idrol"]==2){
            echo '<a href="MiPerfil.php">Ir a Perfil</a></p>';
        }
        if($row["idrol"]==3){
            echo '<a href="PerfilFundacion.php">Ir a Perfil de Fundacion</a></p>';
        }
   //Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
    }else{
        echo 'Password incorrecto';
    }
    }else{
        echo 'Usuario no existente en la base de datos';
    }
    pg_free_result($result);
    }else{
        echo 'Debe especificar un usuario y password';
    }
    
    
pg_close();
?>
         </div>
   
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>