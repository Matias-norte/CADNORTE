<?php
if (empty($_GET["nombre"])) {
    exit("Falta el nombre");
}

if (empty($_GET["correo"])) {
    exit("Falta el correo");
}

if (empty($_GET["mensaje"])) {
    exit("Falta el mensaje");
}

$nombre = $_GET["nombre"];
$correo = $_GET["correo"];
$mensaje = $_GET["mensaje"];

$correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
if (!$correo) {
    echo "Correo inválido. Intenta con otro correo.";
    exit;
}

$asunto = "Nuevo mensaje de sitio web";

$datos = "De: $nombre\nCorreo: $correo\nMensaje: $mensaje";
$mensaje = "Has recibido un mensaje desde el formulario de contacto de tu sitio web. Aquí están los detalles:\n$datos";
$destinatario = "maticirrincione@gmail.com"; # aquí la persona que recibirá los mensajes
$encabezados = "Sender: info@cadnorte.com.ar\r\n"; # El remitente, debe ser un correo de tu dominio de servidor
$encabezados .= "From: $nombre <" . $correo . ">\r\n";
$encabezados .= "Reply-To: $nombre <$correo>\r\n";
$resultado = mail($destinatario, $asunto, $mensaje, $encabezados);
if ($resultado) {
    echo "<h1>Mensaje enviado, ¡Gracias por contactarme!</h1>";
    echo "<p>Tu mensaje se ha enviado correctamente.</p><h2>Importante</h2><p>Revisa tu bandeja de SPAM, en ocasiones mis respuestas quedan ahí. </p>";
} else {
    echo "Tu mensaje no se ha enviado. Intenta de nuevo.";
}
//<?php 

//$name = $_POST['name'];
//$email = $_POST['email'];
//$asunto = $_POST['asunto'];
//$message = $_POST['message'];


//$mensaje= "Este mensaje fue enviado por: " . $name . "\r\n";
//$mensaje .= "Su email es: "  . $email . "\r\n";
//$mensaje .= "El motivo de su contacto es: " . $asunto . "\r\n";
//$mensaje .= "Mensaje: " . $message . "\r\n";
//$mensaje .= "Enviado el dia: " . date("d/m/Y"); 

//$cabeceras = 
   
  //  'X-Mailer: PHP/' . phpversion();

//mail ("maticirrincione@gmail.com", "Mensaje desde la web", '', $mensaje);



// header("location: index.htm");
//header("location: index.html");

//?>