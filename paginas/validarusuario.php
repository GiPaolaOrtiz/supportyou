<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/usuario/usuarioCollector.php");
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
               
                $_SESSION['Misesion']= $username;
                 
                
                

            if($c->getIdrol() == 1){
                echo "<p>hola</p>";

            }

            if($c->getIdrol() == 2){
                 echo "<p>hola</p>";

            }

            }
        }
        
        if (!isset($_SESSION['Misesion'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="login.php"><button class="boton">Regresar</button></a>
                
        
        <?php
             
        }
        
       ?>
            
    </body>
</html>