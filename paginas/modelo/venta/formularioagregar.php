<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administración</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../../img/LogoSupportYou.png">
        <link href="../../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="../../../css/style.css">        
        <link rel="stylesheet"  href="../../../css/estiloCatalogo.css">
        <link rel="stylesheet"  href="../../../css/estiloCarro.css">
        <link rel="stylesheet"  href="../../../css/estiloadmin.css">
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
                               <a class="page-scroll" href="../index.php">HOME</a>
                            </li>
                            <li>
                                <?php
                                    echo"<a class='page-scroll' href='logout.php'>SALIR</a>"
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>    
            <?php 
                    echo '<h2 class="topspace text-center">Ventas</h2>';
                    echo '<h3 class="text-center">Agregar</h3>';                
            ?>
            <div class="container topspace">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                         <form method="post" action="agregar.php">
                            <div class="form-group">
                              <label for="total">Total</label>
                              <input type="text" class="form-control" id="total" placeholder="Escriba el total de la venta" name="total">
                              <label for="cliente">ID Cliente</label>
                              <input type="text" class="form-control" id="cliente" placeholder="Escriba el ID del cliente" name="cliente">
                              <label for="metodo">ID Metodo Pago</label>
                              <input type="text" class="form-control" id="metodo" placeholder="Escriba el ID del metodo de pago" name="metodo">
                              <label for="producto">ID Producto</label>
                              <input type="text" class="form-control" id="producto" placeholder="Escriba el ID del produto" name="producto">
                            </div>
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <a href="view.php" class="btn btn-danger pull-right">Volver</a>
        </main>
         <script src="../../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
        <footer class="pie" id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>  
    </body>
</html>