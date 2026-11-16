<?php
session_start();

$_SESSION['paso1'] = array(
    "nombre" => $_POST['nombre'],
    "apellidos" => $_POST['apellidos'],
    "correo" => $_POST['correo']
);

header("Location: ejercicio5_1.html");
exit();
?>