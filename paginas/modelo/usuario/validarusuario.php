<?php
<<<<<<< HEAD:paginas/modelo/usuario/validarusuario.php
include_once ("usuarioCollector.php");
=======
include_once("modelo/usuario/usuarioCollector.php");

>>>>>>> 645a6099193794c978fbff591b9c2b8c2df03983:paginas/validarusuario.php
session_start();


$username = $_POST['username'];
$pass = $_POST['pass'];
$UsuarioCollectorObj = new UsuarioCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
       

    
        <?php
        foreach ($UsuarioCollectorObj->showUsuarios() as $c){
            if($c->getUsername() == $username && $c->getPass() == $pass){
               
                $_SESSION['user']= $username;
                $_SESSION['rol']= $c->getIdrol();
                 
                
            if($c->getIdrol() == 1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../administrador.php'>";

            }
            if($c->getIdrol() == 2){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";

            }

            }
        }
        
        if (!isset($_SESSION['user'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
<<<<<<< HEAD:paginas/modelo/usuario/validarusuario.php
            <a href="../../login.php"><button class="boton">Regresar</button></a>
=======
            <a href="login.php"><button class="boton">Regresar</button></a>
        <a href="modelo/usuario/usuarioCollector.php"></a>
>>>>>>> 645a6099193794c978fbff591b9c2b8c2df03983:paginas/validarusuario.php
                
        
        <?php
             
        }
        
       ?>
            
    </body>
</html>