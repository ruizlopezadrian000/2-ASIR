<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>
</head>

<body>

    <h2>Inicio de sesión</h2>

    <?php
    if (isset($_GET['error'])) {
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }

    if (isset($_GET['expirado'])) {
        echo "<p>La sesión ha expirado por inactividad.</p>";
    }
    ?>

    <form action="autenticar.php" method="POST">

        Usuario:
        <input type="text" name="usuario" required>
        <br><br>

        Contraseña:
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Entrar">

    </form>

</body>

</html>