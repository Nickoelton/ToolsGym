
<?php

//levanto las los datos a traves de variables
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];

// armo el mail con la info levantada
mail('nickoelton@outlook.com', 'Solicitud web', "Envia: $nombre $apellido \r\n Ciudad: $ciudad \r\n Provincia: $provincia \r\n Telefono: $telefono \r\n E-mail: $email \r\n Mensaje: $mensaje", "From: $email \r\n Bounce-to: tu_correo@tudominio.com");
   
// Una vez que se envia, vuelvo al formulario ancunciando que los datos se enviaron
echo "<script>history.back(alert(\"Enviado correctamente!\"));</script>"; 

?>