<?php

define("USUARIO", "admin");
define("PASSWORD", "1234");

if ($_POST['usuario'] == USUARIO && $_POST['password'] == PASSWORD) {

    session_start();

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['ultimo_acceso'] = time();

    header("Location: ejercicio4_1.php");
    exit();

} else {

    echo "Usuario o contraseña incorrectos.";
    echo "<br><a href='ejercicio4.html'>Volver</a>";

}

?>