
<?php
  $destinatario = 'federicoarroyo88@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  mail($destinatario,$name,$message);
  echo "<h2>Hemos recibido tu mensaje, pronto te contestaremos gracias.</h2>";

  
?>

