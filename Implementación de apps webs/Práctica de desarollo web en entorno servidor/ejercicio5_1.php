<?php
session_start();

$_SESSION['paso2'] = array(
    "satisfaccion" => $_POST['satisfaccion'],
    "intereses" => $_POST['intereses'] ?? array()
);

header("Location: ejercicio5_total.php");
exit();
?>