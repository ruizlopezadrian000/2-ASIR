<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['paso1'] = array(
        "nombre" => $_POST['nombre'],
        "apellidos" => $_POST['apellidos'],
        "correo" => $_POST['correo']
    );

    header("Location: paso2.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Paso 1 - Datos personales</title>
</head>

<body>

    <h2>Encuesta - Datos personales</h2>

    <form method="POST" action="">

        Nombre:
        <input type="text" name="nombre" required>
        <br><br>

        Apellidos:
        <input type="text" name="apellidos" required>
        <br><br>

        Correo electrónico:
        <input type="email" name="correo" required>
        <br><br>

        <input type="submit" value="Siguiente">

    </form>

</body>

</html>