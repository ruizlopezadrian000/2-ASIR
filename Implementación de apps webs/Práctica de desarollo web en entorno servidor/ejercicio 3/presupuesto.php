<?php

$menu = $_POST['menu'];
$espacio = $_POST['espacio'];
$invitados = $_POST['invitados'];

$subtotal = $menu * $invitados;

$totalExtras = 0;

if (isset($_POST['extras'])) {
    $extras = $_POST['extras'];

    foreach ($extras as $extra) {
        $totalExtras = $totalExtras + $extra;
    }
}

$total = $subtotal + $espacio + $totalExtras;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado del presupuesto</title>
</head>

<body>

    <h1>Presupuesto del evento</h1>

    <p> Número de invitados: <?php echo $invitados; ?></p>

    <table border="1" cellpadding="10">

        <tr>
            <th>Concepto</th>
            <th>Precio</th>
        </tr>

        <tr>
            <td>Menú por persona</td>
            <td><?php echo $menu; ?> €</td>
        </tr>

        <tr>
            <td>Subtotal de menús</td>
            <td><?php echo $subtotal; ?> €</td>
        </tr>

        <tr>
            <td>Espacio del evento</td>
            <td><?php echo $espacio; ?> €</td>
        </tr>

        <tr>
            <td>Extras seleccionados</td>
            <td><?php echo $totalExtras; ?> €</td>
        </tr>

        <tr>
            <th>TOTAL FINAL</th>
            <th><?php echo $total; ?> €</th>
        </tr>

    </table>

    <br>

    <a href="presupuesto.html">Volver al formulario</a>

</body>

</html>