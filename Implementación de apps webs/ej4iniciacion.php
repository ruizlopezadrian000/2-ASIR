<?php
$servicios = [
    80 => "HTTP",
    443 => "HTTPS",
    22 => "SSH",
    3306 => "MySQL"
];

echo "<ul>";

foreach ($servicios as $puerto => $nombreServicio) {
    echo "<li>Puerto $puerto: Servicio $nombreServicio</li>";
}

echo "</ul>";
?>