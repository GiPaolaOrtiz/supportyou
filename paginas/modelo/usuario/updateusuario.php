 

<?php

$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];

echo "Ediciones en proceso... </br>";

include_once("DemoCollector.php");
$DemoCollectorObj= new DemoCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre);

echo "id :".$iddemo." actualizado a:".$nombre."</br>";
?>

 <form action="paginas/modelo/usuario/guardarusuario.php" method="post" class="form-signin">
                        <br>
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                        <label class="sr-only">Nombre</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Nombre" required>
                        <label for="inputUsuario" class="sr-only">Usuario</label>
                        <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>

                         <input class="btn btn-lg btn-primary btn-block" type="submit" value="Registrate" />
                        <button id="boton2" class="btn btn-lg btn-primary btn-block" type="submit" onClick="location.href='paginas/login.html'">Iniciar sesion</button>

                        <br>
                        <h4 id="styleh4">Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas, puede cambiar el mundo.</h4>
                    </form>
                    
    <footer id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>
    </footer>

    <!-- js-canvas -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
