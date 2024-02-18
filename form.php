<?php
    if (isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];

        $destinatario = "edirsito@gmail.com";
        $asunto = "Nuevo mensaje de $email";

        $contenido = "Nombre: $nombre \n";
        $contenido .= "Email: $email \n";
        $contenido .= "Mensaje: $mensaje";

        $header = "From: $email"; // Utiliza el correo del remitente como remitente en el encabezado del correo.

        $mail = mail($destinatario, $asunto, $contenido, $header);

        if ($mail) {
            echo "<script>alert('El correo se envió correctamente :)')</script>";
        } else {
            echo "<script>alert('El correo no se pudo enviar, inténtelo nuevamente :(')</script>";
        }
    }
?>
