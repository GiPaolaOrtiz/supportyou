<?php
include_once ("usuarioCollector.php");

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
            <a href="../../login.php"><button class="boton">Regresar</button></a>

     
                
        
        <?php
             
        }
        
       ?>
            
    </body>
</html>