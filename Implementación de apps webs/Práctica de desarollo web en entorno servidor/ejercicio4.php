<?php

session_start();

define("USUARIO", "adrian");
define("PASSWORD", "1234567890");

if ($_POST['usuario'] == USUARIO && $_POST['password'] == PASSWORD) {

    $_SESSION['usuario'] = $_POST['usuario'];

    $_SESSION['ultimo_acceso'] = time();

    header("Location: panel.php");
    exit();

} else {

    header("Location: login.php?error=1");
    exit();

}
?>