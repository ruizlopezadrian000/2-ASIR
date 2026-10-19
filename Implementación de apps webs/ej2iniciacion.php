<?php
function comprobarUsoDisco($porcentaje) {
    if ($porcentaje >= 90) {
        return "Alerta crítica: Espacio casi lleno";
    } elseif ($porcentaje >= 70) {
        return "Advertencia: Espacio moderado";
    } else {
        return "Estado normal: Suficiente espacio libre";
    }
}

echo comprobarUsoDisco(95) . " ";
echo comprobarUsoDisco(75) . " ";
echo comprobarUsoDisco(30);
?>