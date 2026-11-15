<?php

session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array();
}

if (isset($_POST["productos"])) {

    foreach ($_POST["productos"] as $producto) {
        $_SESSION["carrito"][] = $producto;
    }

}

if (isset($_GET["vaciar"])) {
    $_SESSION["carrito"] = array();
}

?>

<h1>Mi carrito</h1>

<?php

foreach ($_SESSION["carrito"] as $producto) {
    echo $producto . "<br>";
}

?>

<br>

<a href="ejercicio2.html">Volver al catálogo</a>

<br><br>

<a href="ejercicio2.php?vaciar=1">Vaciar carrito</a>