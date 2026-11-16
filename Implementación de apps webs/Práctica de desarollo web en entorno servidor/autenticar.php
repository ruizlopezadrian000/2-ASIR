<?php

define("USUARIO", "adrian");
define("PASSWORD", "1234");

if ($_POST['usuario'] == USUARIO && $_POST['password'] == PASSWORD) {

    session_start();

    $_SESSION['usuario'] = $_POST['usuario'];

    $_SESSION['ultimo_acceso'] = time();

    header("Location: panel.php");
    exit();

} else {

    header("Location: login.php?error=1");
    exit();

}

?>