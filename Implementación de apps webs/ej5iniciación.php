<?php
$registro = "2026-10-19 | 192.168.1.15 | ERROR_CONEXION";

$datos = explode(" | ", $registro);

echo "Fecha: " . $datos[0] . "<br>";
echo "IP de origen: " . $datos[1] . "<br>";

if (str_contains($registro, "ERROR")) {
    echo "<strong>Se ha detectado un fallo en el sistema</strong>";
}
?>