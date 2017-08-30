<?php 
$mail='nickoelton@outlook.com'; 

$nombre = $_POST['nombre']; 
$telefono = $_POST['telefono']; 
$email = $_POST['email']; 
$mensaje = $_POST['mensaje']; 
$thank="gracias.html"; 
$message = " 
nombre:".$nombre." 
telefono:".$telefono." 
email:".$email." 
mensaje:".$mensaje.""; 

if (mail($mail,"Formulario de Consulta",$message)) 
Header ("Location: $thank"; 

?> 