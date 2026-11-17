<?php
session_start();

if (!isset($_SESSION['usuario'])) {

    header("Location: login.php");
    exit();

}

if (time() - $_SESSION['ultimo_acceso'] > 120) {

    session_unset();
    session_destroy();

    header("Location: login.php?expirado=1");
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

    <h2>Bienvenido al panel privado</h2>

    <p>Usuario:
        <?php echo $_SESSION['usuario']; ?>
    </p>

    <p>Sesión iniciada correctamente.</p>

    <p>La sesión caducará después de 2 minutos de inactividad.</p>

</body>

</html>