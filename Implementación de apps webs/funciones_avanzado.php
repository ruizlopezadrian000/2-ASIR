<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones en PHP</title>
    <style>
        body { font-family: monospace; line-height: 1.6; padding: 20px; max-width: 900px; margin: auto; background-color: #1e1e1e; color: #d4d4d4; }
        section { background: #252526; padding: 15px 20px; margin-bottom: 20px; border-radius: 6px; border: 1px solid #3c3c3c; }
        h2 { color: #4ec9b0; margin-top: 0; }
        .box { background-color: #1e1e1e; padding: 12px; border-left: 4px solid #007acc; margin-top: 10px; }
        code { color: #ce9178; }
        .badge { display: inline-block; padding: 2px 6px; border-radius: 4px; font-weight: bold; }
        .ok { background: #1e3a1e; color: #6a9955; }
        .fail { background: #3a1e1e; color: #f44747; }
    </style>
</head>
<body>

    <h1>Funciones</h1>

    <section>
        <h2>1. Buenas Prácticas: Parámetros por Defecto y `return`</h2>
        <p>Una función debe calcular y <strong>devolver (return)</strong> un resultado, no imprimirlo directamente. Esto permite reutilizarla en tablas, emails o logs.</p>
        
        <div class="box">
            <?php
                // Formatea bytes a unidades legibles. El segundo parámetro tiene un valor predeterminado (2 decimales).
                function formatearBytes($bytes,$decimales = 2) {
                    $unidades = ['B', 'KB', 'MB', 'GB', 'TB'];$i = 0;
                    while ($bytes >= 1024 &&$i < count($unidades) - 1) {$bytes /= 1024;
                        $i++;
                    }
                    return round($bytes,$decimales) . " " . $unidades[$i];
                }

                $tamanoBackup = 1572864000; // Bytes en disco
                echo "Tamaño de backup: <strong>" . formatearBytes($tamanoBackup) . "</strong>";
            ?>
        </div>
    </section>

    <!-- 2. ÁMBITO DE LAS VARIABLES (SCOPE) -->
    <section>
        <h2>2. Ámbito (Scope): Variable Local vs Global</h2>
        <p>Las variables creadas fuera de una función <strong>NO existen dentro de ella</strong> por defecto (a diferencia de lenguajes como JS o Bash).</p>

        <div class="box">
            <?php
                $servidorPrincipal = "192.168.1.100";

                function probarConexion() {
                    // Para acceder a una variable exterior se debe declarar 'global'
                    global $servidorPrincipal;
                    return "Probando ping a: " . $servidorPrincipal;
                }

                echo probarConexion();
            ?>
            <br><small style="color: #888;">*Nota didáctica: Es mejor pasar las variables como parámetros en vez de abusar de 'global'.</small>
        </div>
    </section>

    <!-- 3. PASO POR VALOR VS PASO POR REFERENCIA (&) -->
    <section>
        <h2>3. Paso por Referencia (El operador <code>&amp;</code>)</h2>
        <p>Por defecto, PHP pasa una copia del valor. Usando <code>&amp;</code> se modifica la variable original directamente (ideal para limpiar entradas de configuración).</p>

        <div class="box">
            <?php
                function sanearHostname(&$nombreHost) {
                    // Pasa a minúsculas y elimina espacios sobrantes de la variable original
                    $nombreHost = strtolower(trim($nombreHost));
                }

                $hostSucio = "  SRV-BACKUP-LINUX  ";
                sanearHostname($hostSucio);

                echo "Hostname original transformado: <strong>\"$hostSucio\"</strong>";
            ?>
        </div>
    </section>

    <!-- 4. FUNCIONES NATIVAS IMPRESCINDIBLES PARA SYSADMINS -->
    <section>
        <h2>4. Las Funciones Nativas Más Usadas en IAW</h2>
        <p>PHP ya incluye cientos de funciones listas para usar. Estas son las esenciales para gestionar servidores y ficheros:</p>

        <div class="box">
            <strong>A. Manejo de Cadenas (Logs y Parsing):</strong><br>
            <?php
                $lineaLog = "192.168.1.50 - GET /admin/login.php - 403";
                
                // explode: divide una cadena en array según un delimitador
                $partes = explode(" - ", $lineaLog);
                echo "IP extraída: <code>" . $partes[0] . "</code> | Código HTTP: <code>" . $partes[2] . "</code><br>";

                // str_contains: comprueba si existe un texto (PHP 8+)
                if (str_contains($lineaLog, "403")) {
                    echo "Alerta de seguridad: <span class='badge fail'>Acceso Denegado Detectado</span><br><br>";
                }
            ?>

            <strong>B. Funciones de Arrays:</strong><br>
            <?php
                $puertosAbiertos = [22, 80, 443, 3306, 8080];

                // in_array: comprueba si un elemento está en la lista
                $puertoBuscar = 3306;
                if (in_array($puertoBuscar,$puertosAbiertos)) {
                    echo "El puerto $puertoBuscar: <span class='badge ok'>Abierto</span><br>";
                }

                // count: cuenta elementos
                echo "Total servicios expuestos: " . count($puertosAbiertos) . "<br><br>";
            ?>

            <strong>C. Fechas y Auditoría:</strong><br>
            <?php
                // date(): formatea marcas de tiempo para backups o registros
                echo "Timestamp de backup actual: <code>" . date("Y-m-d_H-i-s") . "</code>";
            ?>
        </div>
    </section>

</body>
</html>