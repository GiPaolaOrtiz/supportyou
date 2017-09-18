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
                        <a href="../../administrador.php"><img id="estilo_logo" alt="logo" src="../../../img/LogoSupportYou.png"></a>
                    </div>

                   
                </div>
            </nav>    
        <?php 
                $id= $_GET['id'];
                echo '<h2 class="topspace text-center">Fundación</h2>';
                include_once ("../../modelo/fundacion/fundacionCollector.php");
                $FundacionCollectorObj = new fundacionCollector();
                $ObjFundacion=$FundacionCollectorObj->showFundacion($id);
        ?>
         <div class="container topspace">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form method="post" action="Actualizar.php">
                            <div class="form-group">
                              <label for="idu">ID</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getIdFundacion(); ?>" readonly name="idFundacion">
                            </div>
                             <div class="form-group">
                              <label for="metodo">Nombre</label>
                              <input type="text" class="form-control" id="metodo" value="<?php echo $ObjFundacion->getNombre(); ?>" name="nombre">
                            </div>
                            <div class="form-group">
                              <label for="idu">Categoría</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getCategoria(); ?>" name="categoria">
                            </div>
                            <div class="form-group">
                              <label for="idu">Actividad</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getActividad(); ?>" name="actividad">
                            </div>
                            <div class="form-group">
                              <label for="idu">Direccion</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getDireccion(); ?>" name="direccion">
                            </div>
                            <div class="form-group">
                              <label for="idu">Email</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getEmail(); ?>" name="email">
                            </div>
                            <div class="form-group">
                              <label for="idu">Contraseña</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getPass(); ?>" name="pass">
                            </div>
                            <div class="form-group">
                              <label for="idu">Ruc</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getRuc(); ?>" name="ruc">
                            </div>
                            <div class="form-group">
                              <label for="idu">País</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getIdpaisfk(); ?>" name="pais">
                            </div>
                            <div class="form-group">
                              <label for="idu">Ciudad</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getIdciudadfk(); ?>" name="ciudad">
                            </div>
                            <div class="form-group">
                              <label for="idu">Teléfono</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getTelefono(); ?>" name="telefono">
                            </div>
                            <div class="form-group">
                              <label for="idu">Cuenta</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getIdcuentafk(); ?>" name="cuenta">
                            </div>
                            <div class="form-group">
                              <label for="idu">Logo</label>
                              <input type="text" class="form-control" id="idu" value="<?php echo $ObjFundacion->getFoto(); ?>" name="foto" readonly>
                             
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Cambiar Foto </label>
                              <input type="file" class="form-control-file" id="exampleInputFile" value="<?php echo $ObjFundacion->getFoto(); ?>"  name="foto">
                              <small id="fileHelp" class="form-text text-muted"></small>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-info center-block">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                    
                </div>
             
            </div>
             
        </main>
         <script src="../../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
        <footer id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>  
    </body>
</html>