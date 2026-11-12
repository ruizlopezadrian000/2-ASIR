<?php
$temas = [
    'claro' => ['fondo' => '#ffffff', 'texto' => '#222222'],
    'oscuro' => ['fondo' => '#222222', 'texto' => '#ffffff'],
    'sepia' => ['fondo' => '#f4ecd8', 'texto' => '#433422'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $tema = $_POST['tema'] ?? '';

    if ($nombre === '' || !isset($temas[$tema])) {
        http_response_code(400);
        exit('Introduce un nombre y selecciona un tema válido.');
    }

    setcookie('nombre', $nombre, time() + 86400, '/');
    setcookie('tema', $tema, time() + 86400, '/');

    header('Location: procesar_formulario.php');
    exit;
}

if (isset($_GET['restablecer'])) {
    setcookie('nombre', '', time() - 3600, '/');
    setcookie('tema', '', time() - 3600, '/');

    header('Location: procesar_formulario.php');
    exit;
}

$nombreGuardado = $_COOKIE['nombre'] ?? '';
$temaGuardado = $_COOKIE['tema'] ?? 'claro';
$preferenciasGuardadas = isset($_COOKIE['nombre'], $_COOKIE['tema'])
    && isset($temas[$temaGuardado]);

if (!isset($temas[$temaGuardado])) {
    $temaGuardado = 'claro';
}

$estilo = $temas[$temaGuardado];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias de usuario</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($estilo['fondo'], ENT_QUOTES, 'UTF-8') ?>;
            color: <?= htmlspecialchars($estilo['texto'], ENT_QUOTES, 'UTF-8') ?>;
            font-family: Arial, sans-serif;
            margin: 2rem;
        }
    </style>
</head>
<body>
    <h1>Preferencias de usuario</h1>

    <?php if ($preferenciasGuardadas): ?>
        <p>Hola, <?= htmlspecialchars($nombreGuardado, ENT_QUOTES, 'UTF-8') ?>. Tu tema es <?= htmlspecialchars($temaGuardado, ENT_QUOTES, 'UTF-8') ?>.</p>
        <p><a href="procesar_formulario.php?restablecer=1">Restablecer preferencias</a></p>
    <?php endif; ?>

    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            value="<?= htmlspecialchars($nombreGuardado, ENT_QUOTES, 'UTF-8') ?>"
            required
        >
        <br><br>

        <label for="tema">Tema visual:</label>
        <select id="tema" name="tema" required>
            <?php foreach ($temas as $valor => $colores): ?>
                <option
                    value="<?= htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') ?>"
                    <?= $valor === $temaGuardado ? 'selected' : '' ?>
                ><?= htmlspecialchars(ucfirst($valor), ENT_QUOTES, 'UTF-8') ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <button type="submit">Guardar preferencias</button>
    </form>
</body>
</html>
