<?php
for ($i = 5; $i >= 1; $i--) {
    echo $i . "<br>";
}

echo "Copia iniciada el: " . date("Y-m-d H:i:s") . "<br>";

$rutasBackup = ["/var/www", "/etc", "/home"];

if (in_array("/etc", $rutasBackup)) {
    echo "La ruta /etc está incluida en el backup.";
} else {
    echo "La ruta /etc no está incluida en el backup.";
}
?>