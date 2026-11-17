<?php

if (isset($_POST["nombre"])) {

    setcookie("nombre", $_POST["nombre"], time() + 86400);
    setcookie("tema", $_POST["tema"], time() + 86400);

    header("Location: ejercicio1.php");
    exit();
}
if (isset($_GET["borrar"])) {

    setcookie("nombre", "", time() - 3600);
    setcookie("tema", "", time() - 3600);

    header("Location: ejercicio1.php");
    exit();
}

?>

<?php

if (isset($_COOKIE["nombre"])) {

    echo "Hola " . $_COOKIE["nombre"];

    $tema = $_COOKIE["tema"];

    if ($tema == "claro") {
        echo "<body style='background-color:white; color:black'>";
    }

    if ($tema == "oscuro") {
        echo "<body style='background-color:black; color:white'>";
    }

    if ($tema == "sepia") {
        echo "<body style='background-color:#f4ecd8; color:#5b4636'>";
    }

} else {

    echo "No hay preferencias guardadas.";

}

?>

<br><br>

<a href="ejercicio1.html">Cambiar preferencias</a>

<br><br>

<a href="ejercicio1.php?borrar=1">Restablecer preferencias</a>