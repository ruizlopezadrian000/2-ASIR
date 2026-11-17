<?php
session_start();

if (!isset($_SESSION['paso1'])) {
    header("Location: paso1.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['paso2'] = array(
        "satisfaccion" => $_POST['satisfaccion'],
        "intereses" => isset($_POST['intereses']) ? $_POST['intereses'] : array()
    );

    header("Location: resumen.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Paso 2 - Valoración</title>
</head>

<body>

    <h2>Encuesta - Valoración</h2>

    <form method="POST" action="">

        <p>¿Cuál es tu nivel de satisfacción?</p>

        <input type="radio" name="satisfaccion" value="1" required> 1
        <input type="radio" name="satisfaccion" value="2"> 2
        <input type="radio" name="satisfaccion" value="3"> 3
        <input type="radio" name="satisfaccion" value="4"> 4
        <input type="radio" name="satisfaccion" value="5"> 5

        <p>Selecciona tus áreas de interés formativo:</p>

        <input type="checkbox" name="intereses[]" value="Redes"> Redes
        <br>

        <input type="checkbox" name="intereses[]" value="Bases de datos"> Bases de datos
        <br>

        <input type="checkbox" name="intereses[]" value="Programación"> Programación
        <br>

        <input type="checkbox" name="intereses[]" value="Ciberseguridad"> Ciberseguridad
        <br>

        <input type="checkbox" name="intereses[]" value="Sistemas operativos"> Sistemas operativos
        <br><br>

        <input type="submit" value="Enviar">

    </form>

</body>

</html>