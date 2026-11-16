<?php
session_start();

if (isset($_POST['confirmar'])) {
    session_destroy();
    echo "<h2>Encuesta finalizada correctamente.</h2>";
    echo "Gracias por participar.";
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resumen</title>
</head>

<body>

    <h2>Resumen de la encuesta</h2>

    <h3>Datos personales</h3>

    <?php
    echo "Nombre: " . htmlspecialchars($_SESSION['paso1']['nombre']) . "<br>";
    echo "Apellidos: " . htmlspecialchars($_SESSION['paso1']['apellidos']) . "<br>";
    echo "Correo: " . htmlspecialchars($_SESSION['paso1']['correo']) . "<br>";
    ?>
    <h3>Valoración</h3>

    <?php
    echo "Satisfacción: " . htmlspecialchars($_SESSION['paso2']['satisfaccion']) . "<br>";

    echo "Áreas de interés:<br>";

    foreach ($_SESSION['paso2']['intereses'] as $interes) {
        echo htmlspecialchars($interes) . "<br>";
    }
    ?>
    <br>

    <form method="POST" action="">
        <input type="submit" name="confirmar" value="Confirmar y Guardar">
    </form>

</body>

</html>