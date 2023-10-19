<?php
if (isset($_POST["enviar"])) {
    // Recoge los datos del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $correo_institucional = $_POST['correo_institucional'];
    $contacto_celular = $_POST['contacto_celular'];
    $cedula = $_POST['cedula'];
    $conocimiento_microbiologia = $_POST['conocimiento_microbiologia'];
    $practicas_microorganismos = $_POST['practicas_microorganismos'];
    $capacitacion_necesaria = $_POST['capacitacion_necesaria'];
    $mensaje_usuario = $_POST['mensaje'];

    // Define a quién se enviará el correo
    $para = 'tvjosue090@gmail.com';

    // Define el asunto del correo
    $asunto = 'nuevo contacto';

    // Construye el cuerpo del correo
    $mensaje = "Este mensaje fue enviado por: " . $nombre_completo . "\n";
    $mensaje .= "Su correo institucional es: " . $correo_institucional . "\n";
    $mensaje .= "Contacto celular: " . $contacto_celular . "\n";
    $mensaje .= "Cédula: " . $cedula . "\r\n";
    $mensaje .= "Conocimiento sobre microbiología: " . $conocimiento_microbiologia . "\n";
    $mensaje .= "Ha realizado prácticas con microorganismos: " . $practicas_microorganismos . "\n";
    $mensaje .= "Considera necesaria una capacitación práctica sobre la manipulación de microorganismos al inicio de su vinculación en el proyecto: " . $capacitacion_necesaria . "\n";
    $mensaje .= "Mensaje del usuario: " . $mensaje_usuario . "\n";

    // Define las cabeceras del correo
    $header = 'From: ' . $correo_institucional . "\n";


    // Envía el correo
    $enviado = mail($para, $asunto, $mensaje, $header);

    if ($enviado) {
        echo "<script>alert('El correo se ha enviado correctamente.');</script>";
    } else {
        echo "<script>alert('El correo no se ha enviado.');</script>";
    }
}
?>
