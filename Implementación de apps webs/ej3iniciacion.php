<?php
function limpiarUsuario(&$usuario) {
    $usuario = strtolower(trim($usuario));
}

$nombre = " Admin_Sistemas ";

limpiarUsuario($nombre);

echo $nombre;
?>