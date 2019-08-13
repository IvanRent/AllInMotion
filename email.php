<?php 
//
$destino = "ivan_darenteri@hotmail.com" ;
$nombre = $_POST["name"];
$correo = $_POST["email"];
$mensaje = $_POST["message"];
$telefono = $_POST["tel"];
$contenido = "Nombre: ".$nombre."\nCorreo Electronico: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;
mail($destino, "Contacto", $contenido);
header("Location: index.html");
?>