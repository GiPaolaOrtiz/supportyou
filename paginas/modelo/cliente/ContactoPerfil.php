<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contactos</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/portfolio-item.css" rel="stylesheet">
    <link rel="icon" href="../img/LogoSupportYou.png">
    <link href="../css/stylecentral.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="../js/main.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>


    <!-- Menu -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../paginas/MiPerfil.html"><img id="estilo_logo" alt="logo" src="../img/LogoSupportYou.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="MiPerfil.html">MI PERFIL</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="catalogo.html">CATALOGO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="carrito.html">CARRITO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="pago.html">PAGO</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="../index.html">SALIR</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Contact Section -->
    <section id="contact">
        <br>


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="titulo"> <span>Contáctanos</span> </h2>
                    <hr>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tu Nombre *" id="name" required data-validation-required-message="Por favor ingresa Tu Nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico *" id="email" required data-validation-required-message="Por favor ingresa tu Correo Electrónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor ingresa tu Teléfono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Ecribe aquí tu mensaje *" id="estilo_message" required data-validation-required-message="Por favor Ecribe aquí tu mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <br> <br>
                                <div id="success"></div>
                                <button id="btn_mensaje" class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='../paginas/login.html'">Enviar</button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
  <?php
        // Guardar los datos recibidos en variables:
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        // Definir el correo de destino:
        $dest = "abgs15@gmail.com"; 
         
        // Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
        $headers = "From: $nombre $email\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         
        // Aqui definimos el asunto y armamos el cuerpo del mensaje
        $asunto = "Contacto";
        $cuerpo = "<strong>Nombre:</strong> ".$nombre."<br>";
        $cuerpo .= "<strong>Email:</strong> ".$email."<br>";
        $cuerpo .= "<strong>Telefono:</strong> ".$telefono."<br>";
        $cuerpo .= "<strong>Mensaje:</strong> ".$mensaje;
         
        // Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
        if($nombre != '' && $email != '' && $telefono != ''  && $mensaje != ''){
            mail($dest,$cuerpo,$headers); //ENVIAR!
        }
?>


    <div class="container">
        <br>
        

        <hr>
        <br>
        <div id="map"></div>
    </div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNDxIUpBiI6GrRDX-HRm_k9r3AfH3eHws&callback=initMap"></script>

    <!-- /.container-->



    <footer id="footer1">


        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
