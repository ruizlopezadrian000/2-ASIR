<?php
function aplicarDescuento($precio, $descuento = 10) {
    $precioFinal = $precio - ($precio * $descuento / 100);
    return $precioFinal;
}

echo "Precio con descuento: " . aplicarDescuento(50) . " €<br>";
echo "Precio con descuento: " . aplicarDescuento(100, 20) . " €";
?>