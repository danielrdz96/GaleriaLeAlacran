<?php
$destino= "galerialealacran@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_Post["telefono"];
$mensaje = $_Post["mensaje"];
$contenido = "Nombre: " .$nombre . "\nCorreo:" . $correo . "\nTelefono" . $telefono . "\nMensaje" . $mensaje;

mail($destino,"Contacto", $contenido);
header("Location:gracias.html");
?>

