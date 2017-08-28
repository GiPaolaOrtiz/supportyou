<?php
  session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>

<div id="main">
<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

echo "Usuario " . $email . " clave ". $pass;

?>
</div>

</body>
</html>
