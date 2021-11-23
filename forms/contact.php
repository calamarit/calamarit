<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Felicidades</title>
</head>
<body>
<?php
  $destinatario = 'federicoarroyo88@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mensaje = "
        Nombre: ".$name."
        Correo: ".$email."
        Mensaje: ".$message."
  ";

  mail($destinatario,utf8_decode($mensaje));
  echo "<h2>Hemos recibido tu mensaje, pronto te contestaremos gracias.</h2>";

  
?>

</body>
</html>
