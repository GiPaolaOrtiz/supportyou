<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Administración</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/estiloCatalogo.css">
    <link rel="stylesheet" href="../../../css/estiloCarro.css">
    <link rel="stylesheet" href="../../../css/estiloadmin.css">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href="../../../css/bootstrap.min.css">
    <link href="../../../css/estiloPerfil.css" rel='stylesheet' type='text/css'>
</head>

<body>
    <main>
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a href="index.php"><img id="estilo_logo" alt="logo" src="../../../img/LogoSupportYou.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <br>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="../../administrador.php">HOME</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../../logout.php">SALIR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <?php 
                $id= $_GET['id'];
                
                include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/cliente/clienteCollector.php";
                $ClienteCollectorObj = new clienteCollector();
                $ObjCliente=$ClienteCollectorObj->showCliente($id);
        ?>



        <div class="container">
            <br><br> <br><br>
            <div class="jumbotron">
                <h2>Cliente</h2>
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       
                        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">

                            <div>
                                <img src="<?php echo $ObjCliente->getFoto(); ?>" alt="stack photo" class="img">
                            </div>
                                                    
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">

                        <form method="post" class="topspace" action="agregar.php">
                            <div class="form-group">

                                <label for="metodo">IdUsuario</label>
                                <input type="email" class="form-control" id="email" placeholder="Em@il" name="email" value="<?php echo $ObjCliente->getIdusuario(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="metodo">FechaNacimiento</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo $ObjCliente->getFechanacimiento(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="metodo">Nombre de registro</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $ObjCliente->getFecharegistro(); ?>">
                        </div>





                        <br>
                        <a href="view.php" class="btn btn-info center-block">Volver</a>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </main>

    <script src="../../../js/jquery.js"></script>
    <script type="text/javascript" src=""></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
    <footer id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>
    <script src="../../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/perfil.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/uploadPreview.min.js"></script>
    <script src="../../../js/jquery.js" type="text/javascript"></script>
    <script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../js/perfil.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../js/uploadPreview.min.js"></script>
</body>

</html>
