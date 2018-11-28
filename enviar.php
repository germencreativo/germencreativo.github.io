<?php 
    $destino = "germenescreativos@gmail.com";
    $email  = $_POST["email"];
    $nombre  = $_POST["nombre"];
    $mensaje  = $_POST["mensaje"];
    
    $contenido = "email: " . $email . "\Nombre: " .$nombre . "\Mensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:index.html");
?>