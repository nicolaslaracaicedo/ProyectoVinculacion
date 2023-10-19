<?php
    // Recoge los datos del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $correo_institucional = $_POST['correo_institucional'];
    $contacto_celular = $_POST['contacto_celular'];
    $cedula = $_POST['cedula'];
    $conocimiento_microbiologia = $_POST['conocimiento_microbiologia'];

    // Define a quién se enviará el correo
    $para = 'tvjosue090@gmail.com';

    // Define el asunto del correo
    $asunto = 'nuevo contacto';

    // Construye el cuerpo del correo
    $mensaje = "Este mensaje fue enviado por: " . $nombre_completo . "\r\n";
    $mensaje .= "Su correo institucional es: " . $correo_institucional . "\r\n";
    $mensaje .= "Contacto celular: " . $contacto_celular . "\r\n";
    $mensaje .= "Cédula: " . $cedula . "\r\n";
    $mensaje .= "Conocimiento sobre microbiología: " . $conocimiento_microbiologia . "\r\n";

    // Define las cabeceras del correo
    $header = 'From: ' . $correo_institucional . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    // Envía el correo
    $enviado = mail($para, $asunto, $mensaje, $header);

    if ($enviado) {
        echo 'El correo se ha enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar el correo.';
    }
?>
