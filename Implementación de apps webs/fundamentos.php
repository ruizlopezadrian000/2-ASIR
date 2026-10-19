<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fundamentos Básicos de Programación en PHP</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; max-width: 800px; margin: auto; background-color: #f9f9f9; }
        section { background: white; padding: 15px 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; border-bottom: 2px solid #ecf0f1; padding-bottom: 5px; }
        .resultado { background-color: #e8f4f8; padding: 10px; border-left: 4px solid #3498db; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>Introducción a la Programación con PHP</h1>

    <!-- 1. VARIABLES Y TIPOS DE DATOS -->
    <section>
        <h2>1. Variables y Tipos de Datos</h2>
        <p>Una variable es un contenedor para almacenar datos (se define siempre con <code>$</code>).</p>
        
        <div class="resultado">
            <?php
            $numero = 100;
                while ($numero>0){
                    echo "Número: " . $numero . "<br>";
                    $numero -= 1;
                }
            ?>
        </div>
    </section>

    
    <section>
        <h2>2. Condicionales (if / else)</h2>
        <p>Permiten ejecutar diferentes acciones según se cumpla o no una condición.</p>

        <div class="resultado">
            <?php
                $nota = 6.5;

                echo "Nota obtenida: " . $nota . "<br>";

                if ($nota >= 9) {
                    echo "<strong>Calificación:</strong> Sobresaliente";
                }if ($nota >= 5) {
                    echo "<strong>Calificación:</strong> Aprobado";
                }if($nota >=3){
                    echo "<strong>Calificación:</strong> Suspenso";
                }else{

                }
            ?>
        </div>
    </section>

   
    <section>
        <h2>3. Arrays (Listas de datos)</h2>
        <p>Permiten guardar múltiples valores dentro de una sola variable.</p>

        <div class="resultado">
            <?php
                // Array indexado (lista tradicional)
                $lenguajes = ["HTML", "CSS", "JavaScript", "PHP"];
                echo "Primer lenguaje de la lista: <strong>" . $lenguajes[0] . "</strong><br><br>";

                // Array asociativo (clave => valor, similar a un diccionario)
                $usuario = [
                    "username" => "dev_junior",
                    "rol" => "Alumno",
                    "activo" => true
                ];

                echo "Usuario: " . $usuario["username"] . " (Rol: " . $usuario["rol"] . ")";
            ?>
        </div>
    </section>

   
    <section>
        <h2>4. Bucles (for y foreach)</h2>
        <p>Automatizan tareas repetitivas sin tener que escribir código duplicado.</p>

        <div class="resultado">
            <strong>Bucle For (contar del 1 al 5):</strong><br>
            <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo $i . " ";
                }

                while($i <= 10){
                    echo $i . " ";
                    $i++;
                }
            ?>

            <br><br><strong>Bucle Foreach (recorrer una lista para crear HTML):</strong>
            <ul>
                <?php
                    foreach ($lenguajes as $item) {
                        echo "<li>" . $item . "</li>";
                    }
                ?>
            </ul>
        </div>
    </section>

    
    <section>
        <h2>5. Funciones</h2>
        <p>Bloques de código aislados que reciben datos, hacen una tarea y devuelven un resultado.</p>

        <div class="resultado">
            <?php
                // Definición de la función
                function calcularPrecioTotal($precioBase, $iva = 0.21) {
                    $total = $precioBase + ($precioBase * $iva);
                    return $total;
                }

                // Llamada a la función con distintos valores
                $producto1 = calcularPrecioTotal(100);
                $producto2 = calcularPrecioTotal(50);

                echo "Precio base: 100€ -> Total con IVA: <strong>" . $producto1 . "€</strong><br>";
                echo "Precio base: 50€ -> Total con IVA: <strong>" . $producto2 . "€</strong>";
            ?>
        </div>
    </section>

</body>
</html>