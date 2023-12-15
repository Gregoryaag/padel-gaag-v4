<?php

ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 465);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $informacion = $_POST['informacion'];

    $destinatario = 'gaag.m23@gmail.com';
    $asunto = 'Nuevo formulario de contacto';
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Correo: $correo\n";
    $mensaje .= "Información: $informacion\n";

    // Envía el correo
    $headers = 'From: ' . $correo . "\r\n" .
               'Reply-To: ' . $correo . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo 'El formulario ha sido enviado correctamente.';
    } else {
        echo 'Ha ocurrido un error al enviar el formulario.';
    }
}
?>