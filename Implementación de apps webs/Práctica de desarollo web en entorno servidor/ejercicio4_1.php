<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ejercicio4.html");
    exit();
}

if (time() - $_SESSION['ultimo_acceso'] > 120) {

    session_destroy();

    header("Location: ejercicio4.html");
    exit();

}

$_SESSION['ultimo_acceso'] = time();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Panel privado</title>
</head>

<body>

    <h2>Panel privado</h2>

    <p>Bienvenido
        <?php echo $_SESSION['usuario']; ?>
    </p>

    <p>Tu sesión está activa.</p>

</body>

</html>