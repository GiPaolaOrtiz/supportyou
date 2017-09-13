<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro de fundación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='../../../css/estiloRegistro.css' rel='stylesheet' type='text/css'>
    <link href="../../../css/style.css" rel="stylesheet">
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
                <a href="../index.html"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="../paginas/RegistroFundacion.html">FUNDACIONES</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="../paginas/contactos.html">CONTÁCTENOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">

            <div class="col-md-3">

                <form action="" class="form-signin" method="post">
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
                    <button id="boton2" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>

                </form>

            </div>

            <div class="col-md-9">

                <div class="thumbnail">



                    <div>
                        <h3 id="colorTexto"> <span>Completa los datos de la organización a la que perteneces</span> </h3>
                        <hr>

                    </div>


                    <div id="formulario">

                        <div class="row">

                            <div class="col-lg-8 col-lg-offset-2">

                                <h1>Registro</h1>

                                <hr id="linea">

                                <form action="guardarFundacion.php" id="contact-form" method="post">

                                    <div class="messages"></div>

                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nombre *</label>
                                                    <input id="form_name" type="text" name="nombre" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Categoría *</label>

                                                    <select id="selectbasic" method="post" name="categoria" class="form-control" required>
                                                        <option value="" selected>Selecione</option> 
                                                        <?php
                                                        include_once("../fundacionCategoria/fundacionCategoriaCollector.php");
     
                                                            $id =1;
                                                            $CategoriaCollectorObj = new fundacionCategoriaCollector();

                                                            foreach ($CategoriaCollectorObj->showFundacionCategorias() as $c){
                                                                $id =$c->getIdCategoria();
                                                                echo "<option value= ".$c->getIdCategoria(). ">". $c->getNombre(). "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_activity">Actividad *</label>
                                                    <textarea id="form_activity" name="actividad" class="form-control" placeholder="Describa su organización *" cols="1" rows="4" required="required"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">País *</label>


                                                    <select name="pais" method="post" class="form-control" required>
  
                                                        <option value="" selected>Selecione</option> 
                                                        <?php
                                                        include_once("../pais/paisCollector.php");
     
                                                            $id =1;
                                                            $PaisCollectorObj = new paisCollector();

                                                            foreach ($PaisCollectorObj->showPaises() as $c){
                                                                $id =$c->getIdPais();
                                                                echo "<option value= ".$c->getIdPais(). ">". $c->getNombre(). "</option>";
                                                            }
                                                        ?>
                                                    </select>
              
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_city">Ciudad *</label>
                                                    <input id="form_city" type="text" name="ciudad" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Dirección *</label>
                                                    <input id="form_address" type="text" name="direccion" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_phone">Teléfono *</label>
                                                    <input id="form_phone" type="tel" name="telefono" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_pass">Contraseña *</label>
                                                    <input id="form_pass" type="password" name="contraseña" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_number">N. de cuenta *</label>
                                                    <input id="form_number" type="text" name="ncuenta" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_ruc">RUC *</label>
                                                    <input id="form_ruc" type="text" name="ruc" class="form-control" required="required">
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                            </div>


                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-md-12" id="boton">

                                                <button id="botonRegFund" type="submit" class="btn btn-default">Registrar organización</button>


                                            </div>
                                        </div>

                                        <div class="row">
                                            <div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <!-- /.8 -->


                        </div>
                        <!-- /.row-->



                    </div>

                    <div>

                        <hr>

                    </div>


                </div>



            </div>

        </div>

    </div>
    <!-- /.container -->




    <!-- /.container-->

    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
