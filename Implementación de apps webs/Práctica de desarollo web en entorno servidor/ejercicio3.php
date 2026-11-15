<?php

$menu = $_POST["menu"];
$espacio = $_POST["espacio"];
$invitados = $_POST["invitados"];

$subtotal = $menu * $invitados;

$total_extras = 0;

if (isset($_POST["extras"])) {

    foreach ($_POST["extras"] as $extra) {
        $total_extras = $total_extras + $extra;
    }

}

$total = $subtotal + $espacio + $total_extras;

?>

<h1>Presupuesto del evento</h1>

<p>Precio del menú:
    <?php echo $menu; ?> € por persona
</p>

<p>Número de invitados:
    <?php echo $invitados; ?>
</p>

<p>Subtotal de menús:
    <?php echo $subtotal; ?> €
</p>

<p>Espacio del evento:
    <?php echo $espacio; ?> €
</p>

<p>Extras:
    <?php echo $total_extras; ?> €
</p>

<h2>Precio total:
    <?php echo $total; ?> €
</h2>