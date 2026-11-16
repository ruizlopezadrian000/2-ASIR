<?php
session_start();

if (!isset($_SESSION['paso1']) || !isset($_SESSION['paso2'])) {
    header("Location: paso1.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_unset();
    session_destroy();

    echo "<h2>Encuesta finalizada correctamente.</h2>";
    echo "<p>Gracias por participar.</p>";
    exit();
}

$paso1 = $_SESSION['paso1'];
$paso2 = $_SESSION['paso2'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resumen de la encuesta</title>
</head>

<body>

    <h2>Resumen de la encuesta</h2>

    <h3>Datos personales</h3>

    <p>Nombre:
        <?php echo $paso1['nombre']; ?>
    </p>
    <p>Apellidos:
        <?php echo $paso1['apellidos']; ?>
    </p>
    <p>Correo:
        <?php echo $paso1['correo']; ?>
    </p>

    <h3>Valoración</h3>

    <p>Satisfacción:
        <?php echo $paso2['satisfaccion']; ?> / 5
    </p>

    <p>Áreas de interés:</p>

    <ul>
        <?php
        foreach ($paso2['intereses'] as $interes) {
            echo "<li>" . htmlspecialchars($interes) . "</li>";
        }
        ?>
    </ul>

    <form method="POST" action="">
        <input type="submit" value="Confirmar y Guardar">
    </form>

</body>

</html>