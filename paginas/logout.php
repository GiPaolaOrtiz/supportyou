<?php
session_start();
//Matamos la sesion
session_destroy();
echo 'Ha terminado la session <p><a href="index.php">INICIO</a></p>';
?>