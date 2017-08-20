<?php
  session_start();
?>

<?php

$_SESSION['MiSesion']= $_POST['nombre'];

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$actividad = $_POST['actividad'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$n_decuenta = $_POST['ncuenta'];
$ruc = $_POST['ruc'];




echo "Nombre: ". $nombre; 
echo "</br> Categoria ". $categoria;
echo "</br> Actividad: " . $actividad;
echo "</br> Pais ". $pais;
echo "</br> Ciudad: " . $ciudad;
echo "</br> Direccion ". $direccion;
echo "</br> Telefono: " . $telefono;
echo "</br> Email ". $email;
echo "</br> Contraseña: " . $contraseña;
echo "</br> N. de Cuenta ". $n_decuenta;
echo "</br> Ruc: " . $ruc;

echo "</br> <a href='PerfilFundacion.php'> Visitar Mi perfil </a>";

?>