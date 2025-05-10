<?php
/**
 * Ejemplos de Estatutos de Repetición en PHP
 * 
 * Los estatutos de repetición permiten ejecutar un bloque de código múltiples veces.
 * PHP ofrece diferentes estructuras de repetición: for, while, do-while y foreach.
 */

// Configuración para mostrar el resultado
echo "<div style='background-color: #f9f9f9; padding: 20px; border-radius: 8px; font-family: Arial, sans-serif;'>";
echo "<h1 style='color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 10px;'>ESTATUTOS DE REPETICIÓN EN PHP</h1>";

// INTRODUCCIÓN
echo "<div style='background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 20px;'>";
echo "<p style='font-size: 16px;'><strong>Los Estatutos de Repetición</strong> (también llamados bucles o ciclos) son estructuras que permiten ejecutar un bloque de código múltiples veces. PHP ofrece cuatro estructuras principales: <span style='color: #e74c3c;'>for, while, do-while y foreach</span>.</p>";
echo "</div>";

// ======================= BUCLE FOR =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>1. BUCLE FOR</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del bucle for:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Uso principal:</strong> Cuando conocemos de antemano el número exacto de iteraciones</li>";
echo "<li><strong>Estructura:</strong> Tiene tres partes: inicialización, condición e incremento</li>";
echo "<li><strong>Control preciso:</strong> Permite un control detallado del contador de iteraciones</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("for (inicialización; condición; incremento) {
    // código a ejecutar en cada iteración
}");
echo "</code>";
echo "</div>";

// Ejemplo de uso del bucle for - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de bucle for</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Mostrar los números del 1 al 5
for (\$i = 1; \$i <= 5; \$i++) {
    echo \"Iteración \$i<br>\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteración $i<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li><code>\$i = 1</code>: Inicializamos el contador en 1</li>";
echo "<li><code>\$i <= 5</code>: Continuamos mientras i sea menor o igual a 5</li>";
echo "<li><code>\$i++</code>: Incrementamos i después de cada iteración</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// ======================= BUCLE WHILE =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>2. BUCLE WHILE</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del bucle while:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Uso principal:</strong> Cuando queremos repetir un bloque mientras se cumpla una condición</li>";
echo "<li><strong>Evaluación:</strong> La condición se evalúa <em>antes</em> de ejecutar el bloque</li>";
echo "<li><strong>Precaución:</strong> Si la condición nunca es verdadera, el bloque no se ejecutará</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("while (condición) {
    // código a ejecutar mientras la condición sea verdadera
}");
echo "</code>";
echo "</div>";

// Ejemplo de uso del bucle while - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de bucle while</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Mostrar los números pares del 2 al 10
\$j = 2;
while (\$j <= 10) {
    echo \"\$j es par<br>\";
    \$j += 2;
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$j = 2;
while ($j <= 10) {
    echo "$j es par<br>";
    $j += 2;
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li>Inicializamos <code>\$j = 2</code> antes de entrar al bucle</li>";
echo "<li>En cada iteración, verificamos si <code>\$j <= 10</code></li>";
echo "<li>Si la condición es verdadera, mostramos el número y aumentamos en 2</li>";
echo "<li>El bucle termina cuando <code>\$j</code> supera el valor 10</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// ======================= BUCLE DO-WHILE =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>3. BUCLE DO-WHILE</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del bucle do-while:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Uso principal:</strong> Cuando necesitamos ejecutar el código al menos una vez</li>";
echo "<li><strong>Evaluación:</strong> La condición se evalúa <em>después</em> de ejecutar el bloque</li>";
echo "<li><strong>Garantía:</strong> El bloque siempre se ejecuta al menos una vez, incluso si la condición es falsa inicialmente</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("do {
    // código a ejecutar al menos una vez
} while (condición);");
echo "</code>";
echo "</div>";

// Ejemplo de uso del bucle do-while - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de bucle do-while</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Cuenta regresiva del 5 al 1
\$k = 5;
do {
    echo \"Cuenta regresiva: \$k<br>\";
    \$k--;
} while (\$k > 0);";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$k = 5;
do {
    echo "Cuenta regresiva: $k<br>";
    $k--;
} while ($k > 0);
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li>Iniciamos con <code>\$k = 5</code></li>";
echo "<li>Mostramos el valor y decrementamos <code>\$k</code> en cada iteración</li>";
echo "<li>Continuamos mientras <code>\$k > 0</code></li>";
echo "<li>Observa que el bloque se ejecuta primero y luego se evalúa la condición</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// Mostrar diferencia entre while y do-while
echo "<div style='background-color: #ffe5e8; padding: 15px; border-radius: 5px; margin-bottom: 15px; border-left: 5px solid #e74c3c;'>";
echo "<h4 style='color: #e74c3c;'>Diferencia clave entre while y do-while:</h4>";

echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-between;'>";
echo "<div style='flex: 1; min-width: 300px; margin: 5px; background-color: #f9f9f9; padding: 10px; border-radius: 5px;'>";
echo "<strong>Bucle while con condición falsa inicialmente:</strong>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "\$n = 10;
while (\$n < 5) {
    echo \"Esto no se ejecutará\";
    \$n++;
}";
echo "</pre>";
echo "<p>Resultado: <em>(No se muestra nada, el bloque nunca se ejecuta)</em></p>";
echo "</div>";

echo "<div style='flex: 1; min-width: 300px; margin: 5px; background-color: #f9f9f9; padding: 10px; border-radius: 5px;'>";
echo "<strong>Bucle do-while con condición falsa inicialmente:</strong>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "\$n = 10;
do {
    echo \"Esto se ejecuta una vez\";
    \$n++;
} while (\$n < 5);";
echo "</pre>";
echo "<p>Resultado: <em>Esto se ejecuta una vez</em></p>";
echo "</div>";
echo "</div>";
echo "</div>";

// ======================= BUCLE FOREACH =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>4. BUCLE FOREACH</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del bucle foreach:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Uso principal:</strong> Diseñado específicamente para iterar sobre arreglos y objetos</li>";
echo "<li><strong>Ventaja:</strong> No necesitamos conocer la longitud del arreglo ni manejar índices</li>";
echo "<li><strong>Versatilidad:</strong> Funciona con arreglos indexados, asociativos y objetos iterables</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("// Para arreglos indexados:
foreach (arreglo as valor) {
    // código a ejecutar para cada valor
}

// Para arreglos asociativos:
foreach (arreglo as clave => valor) {
    // código a ejecutar para cada par clave-valor
}");
echo "</code>";
echo "</div>";

// Ejemplo de uso del bucle foreach - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo 1: foreach con arreglo indexado</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$colores = [\"rojo\", \"verde\", \"azul\", \"amarillo\"];

foreach (\$colores as \$color) {
    echo \"Color: \$color<br>\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$colores = ["rojo", "verde", "azul", "amarillo"];
foreach ($colores as $color) {
    echo "Color: $color<br>";
}
echo "</div>";
echo "</div>";

// Ejemplo 2 de foreach
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo 2: foreach con arreglo asociativo</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$capitales = [
    \"México\" => \"Ciudad de México\",
    \"España\" => \"Madrid\",
    \"Francia\" => \"París\",
    \"Italia\" => \"Roma\"
];

foreach (\$capitales as \$pais => \$capital) {
    echo \"La capital de \$pais es \$capital<br>\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$capitales = [
    "México" => "Ciudad de México",
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Roma"
];
foreach ($capitales as $pais => $capital) {
    echo "La capital de $pais es $capital<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ul>";
echo "<li>En el primer ejemplo, <code>\$color</code> toma cada valor del arreglo <code>\$colores</code></li>";
echo "<li>En el segundo ejemplo, <code>\$pais</code> recibe la clave y <code>\$capital</code> recibe el valor</li>";
echo "<li>El bucle se ejecuta automáticamente para cada elemento, sin necesidad de índices</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= CONTROL DE BUCLES =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>5. CONTROL DE BUCLES: BREAK Y CONTINUE</h2>";

// Break explanation
echo "<div style='background-color: #fef5e7; padding: 15px; border-left: 5px solid #e67e22; margin-bottom: 15px;'>";
echo "<h3 style='color: #e67e22;'>La instrucción break:</h3>";
echo "<p>La instrucción <code>break</code> termina la ejecución del bucle actual y continúa con el código después del bucle.</p>";
echo "</div>";

// Ejemplo de break - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de break</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Detener cuando encontramos el número 5
for (\$i = 1; \$i <= 10; \$i++) {
    if (\$i == 5) {
        echo \"Encontramos el 5, salimos del bucle<br>\";
        break;
    }
    echo \"Número: \$i<br>\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Encontramos el 5, salimos del bucle<br>";
        break;
    }
    echo "Número: $i<br>";
}
echo "</div>";
echo "</div>";

// Continue explanation
echo "<div style='background-color: #fef5e7; padding: 15px; border-left: 5px solid #e67e22; margin-bottom: 15px;'>";
echo "<h3 style='color: #e67e22;'>La instrucción continue:</h3>";
echo "<p>La instrucción <code>continue</code> omite la iteración actual y continúa con la siguiente.</p>";
echo "</div>";

// Ejemplo de continue - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de continue</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Saltar los números pares
for (\$i = 1; \$i <= 8; \$i++) {
    if (\$i % 2 == 0) {
        echo \"Número \$i es par, lo saltamos<br>\";
        continue;
    }
    echo \"Procesando número impar: \$i<br>\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
for ($i = 1; $i <= 8; $i++) {
    if ($i % 2 == 0) {
        echo "Número $i es par, lo saltamos<br>";
        continue;
    }
    echo "Procesando número impar: $i<br>";
}
echo "</div>";
echo "</div>";

// ======================= BUCLES ANIDADOS =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>6. BUCLES ANIDADOS</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Bucles dentro de bucles:</h3>";
echo "<p>Podemos colocar un bucle dentro de otro bucle. El bucle interior se ejecutará completamente por cada iteración del bucle exterior.</p>";
echo "</div>";

// Ejemplo de bucles anidados - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de bucles anidados: Tabla de multiplicar</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "echo \"<table border='1' cellpadding='5' style='border-collapse: collapse;'>\";\n";
echo "for (\$i = 1; \$i <= 5; \$i++) {\n";
echo "    echo \"<tr>\";\n";
echo "    for (\$j = 1; \$j <= 5; \$j++) {\n";
echo "        \$resultado = \$i * \$j;\n";
echo "        echo \"<td>\$i × \$j = \$resultado</td>\";\n";
echo "    }\n";
echo "    echo \"</tr>\";\n";
echo "}\n";
echo "echo \"</table>\";";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<table border='1' cellpadding='5' style='border-collapse: collapse; margin-top: 10px;'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $resultado = $i * $j;
        echo "<td>$i × $j = $resultado</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ul>";
echo "<li>El bucle exterior (<code>i</code>) controla las filas de la tabla</li>";
echo "<li>El bucle interior (<code>j</code>) controla las columnas de cada fila</li>";
echo "<li>Por cada valor de <code>i</code>, el bucle de <code>j</code> se ejecuta completamente</li>";
echo "<li>Esto genera una tabla de 5×5 con los resultados de la multiplicación</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= RESUMEN COMPARATIVO =======================
echo "<div style='background-color: #f2f8ff; padding: 15px; border-radius: 5px; border: 1px solid #3498db; margin-top: 30px;'>";
echo "<h3 style='color: #3498db; text-align: center;'>COMPARACIÓN DE BUCLES EN PHP</h3>";

echo "<table style='width: 100%; border-collapse: collapse; margin-top: 15px;'>";
echo "<thead style='background-color: #3498db; color: white;'>";
echo "<tr>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Tipo de Bucle</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Uso Ideal</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Característica Distintiva</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>for</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Cuando conocemos el número exacto de iteraciones</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Incluye inicialización, condición e incremento en una línea</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>while</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Cuando no sabemos cuántas iteraciones se necesitan</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>La condición se evalúa antes de ejecutar el bloque</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>do-while</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Cuando necesitamos ejecutar el código al menos una vez</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>La condición se evalúa después de ejecutar el bloque</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>foreach</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Para recorrer arreglos u objetos iterables</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>No requiere índices ni conocer la longitud del arreglo</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</div>";

echo "</div>";
?>
