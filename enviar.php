<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];


$mensaje= "Este mensaje fue enviado por: " . $name . "\r\n";
$mensaje .= "Su email es: "  . $email . "\r\n";
$mensaje .= "El motivo de su contacto es: " . $asunto . "\r\n";
$mensaje .= "Mensaje: " . $message . "\r\n";
$mensaje .= "Enviado el dia: " . date("d/m/Y"); 

//$cabeceras = 
   
    'X-Mailer: PHP/' . phpversion();

mail ("maticirrincione@gmail.com", "Mensaje desde la web", '', $mensaje);



// header("location: index.htm");
header("location: index.html");

?>