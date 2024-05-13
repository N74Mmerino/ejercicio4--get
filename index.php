<?php

$nombre = $_GET['nombre'];
$correoelectronico= $_GET['correoelectronico'];

$mensaje = 'Hola ' . $nombre . ' hemos registrado su correo electrónico correctamente : '. $correoelectronico ;

echo $mensaje ;

