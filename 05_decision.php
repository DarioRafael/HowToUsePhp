<?php
/**
 * Ejemplos de Estatutos de Decisión en PHP
 * 
 * Los estatutos de decisión permiten ejecutar diferentes bloques de código
 * dependiendo de ciertas condiciones.
 * PHP ofrece if-else, switch-case y el operador ternario.
 */

// Configuración para mostrar el resultado
echo "<div style='background-color: #f9f9f9; padding: 20px; border-radius: 8px; font-family: Arial, sans-serif;'>";
echo "<h1 style='color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 10px;'>ESTATUTOS DE DECISIÓN EN PHP</h1>";

// INTRODUCCIÓN
echo "<div style='background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 20px;'>";
echo "<p style='font-size: 16px;'><strong>Los Estatutos de Decisión</strong> permiten al programa tomar diferentes caminos de ejecución dependiendo de si ciertas condiciones son verdaderas o falsas. PHP ofrece varias estructuras de decisión: <span style='color: #e74c3c;'>if, if-else, if-elseif-else, switch</span>, y operadores especiales como el operador ternario.</p>";
echo "</div>";

// ======================= ESTATUTO IF =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>1. ESTATUTO IF</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del estatuto if:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Propósito:</strong> Ejecuta un bloque de código solo si la condición especificada es verdadera</li>";
echo "<li><strong>Evaluación:</strong> La condición se evalúa como un valor booleano (true/false)</li>";
echo "<li><strong>Uso:</strong> Ideal para situaciones de decisión simples con una sola condición</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("if (condición) {
    // código a ejecutar si la condición es verdadera
}");
echo "</code>";
echo "</div>";

// Ejemplo de estatuto if - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de estatuto if</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$edad = 25;

if (\$edad >= 18) {
    echo \"Es mayor de edad\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$edad = 25;
echo "Variable \$edad = $edad<br>";
if ($edad >= 18) {
    echo "Es mayor de edad<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li>La variable <code>\$edad</code> tiene el valor 25</li>";
echo "<li>La condición <code>\$edad >= 18</code> evalúa si la edad es mayor o igual a 18</li>";
echo "<li>Como 25 es mayor que 18, la condición es verdadera</li>";
echo "<li>Por lo tanto, se ejecuta el código dentro del bloque if</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// ======================= ESTATUTO IF-ELSE =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>2. ESTATUTO IF-ELSE</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del estatuto if-else:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Propósito:</strong> Permite ejecutar un bloque de código si la condición es verdadera y otro bloque si es falsa</li>";
echo "<li><strong>Ventaja:</strong> Garantiza que siempre se ejecutará uno de los dos bloques de código</li>";
echo "<li><strong>Uso:</strong> Ideal para situaciones con dos alternativas mutuamente excluyentes</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("if (condición) {
    // código a ejecutar si la condición es verdadera
} else {
    // código a ejecutar si la condición es falsa
}");
echo "</code>";
echo "</div>";

// Ejemplo de if-else - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de estatuto if-else</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$temperatura = 15;

if (\$temperatura > 20) {
    echo \"Hace calor\";
} else {
    echo \"No hace calor\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$temperatura = 15;
echo "Variable \$temperatura = $temperatura<br>";
if ($temperatura > 20) {
    echo "Hace calor<br>";
} else {
    echo "No hace calor<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li>La variable <code>\$temperatura</code> tiene el valor 15</li>";
echo "<li>La condición <code>\$temperatura > 20</code> evalúa si la temperatura es mayor a 20</li>";
echo "<li>Como 15 no es mayor que 20, la condición es falsa</li>";
echo "<li>Por lo tanto, se ejecuta el código dentro del bloque else</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// ======================= ESTATUTO IF-ELSEIF-ELSE =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>3. ESTATUTO IF-ELSEIF-ELSE</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del estatuto if-elseif-else:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Propósito:</strong> Permite comprobar múltiples condiciones de forma secuencial</li>";
echo "<li><strong>Funcionamiento:</strong> Las condiciones se evalúan en orden, y se ejecuta el bloque de la primera condición verdadera</li>";
echo "<li><strong>Uso:</strong> Ideal para situaciones con múltiples alternativas posibles</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace; white-space: pre;'>";
echo htmlspecialchars("if (condición1) {
    // código a ejecutar si condición1 es verdadera
} elseif (condición2) {
    // código a ejecutar si condición2 es verdadera
} elseif (condición3) {
    // código a ejecutar si condición3 es verdadera
} else {
    // código a ejecutar si ninguna condición es verdadera
}");
echo "</code>";
echo "</div>";

// Ejemplo de if-elseif-else - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de estatuto if-elseif-else</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$puntuacion = 85;

if (\$puntuacion >= 90) {
    echo \"Calificación: A (Excelente)\";
} elseif (\$puntuacion >= 80) {
    echo \"Calificación: B (Bueno)\";
} elseif (\$puntuacion >= 70) {
    echo \"Calificación: C (Regular)\";
} elseif (\$puntuacion >= 60) {
    echo \"Calificación: D (Aprobado)\";
} else {
    echo \"Calificación: F (Reprobado)\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$puntuacion = 85;
echo "Variable \$puntuacion = $puntuacion<br>";
if ($puntuacion >= 90) {
    echo "Calificación: A (Excelente)<br>";
} elseif ($puntuacion >= 80) {
    echo "Calificación: B (Bueno)<br>";
} elseif ($puntuacion >= 70) {
    echo "Calificación: C (Regular)<br>";
} elseif ($puntuacion >= 60) {
    echo "Calificación: D (Aprobado)<br>";
} else {
    echo "Calificación: F (Reprobado)<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li>La variable <code>\$puntuacion</code> tiene el valor 85</li>";
echo "<li>Se evalúan las condiciones en orden:</li>";
echo "<ul>";
echo "<li>¿85 >= 90? No, se pasa a la siguiente condición</li>";
echo "<li>¿85 >= 80? Sí, se ejecuta este bloque y se omiten las demás condiciones</li>";
echo "</ul>";
echo "<li>El orden de las condiciones es importante, ya que se ejecuta solo el bloque de la primera condición verdadera</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// ======================= ESTATUTO SWITCH =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>4. ESTATUTO SWITCH</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del estatuto switch:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Propósito:</strong> Comparar una variable con múltiples valores posibles</li>";
echo "<li><strong>Funcionamiento:</strong> Evalúa una expresión y la compara con diferentes casos</li>";
echo "<li><strong>Uso:</strong> Ideal para situaciones con múltiples valores específicos a comparar</li>";
echo "<li><strong>Importante:</strong> Cada caso debe terminar con <code>break</code> para evitar la ejecución en cascada</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("switch (expresión) {
    case valor1:
        // código a ejecutar si expresión == valor1
        break;
    case valor2:
        // código a ejecutar si expresión == valor2
        break;
    case valor3:
    case valor4: // múltiples casos con el mismo código
        // código a ejecutar si expresión == valor3 O expresión == valor4
        break;
    default:
        // código a ejecutar si no coincide con ningún caso
}");
echo "</code>";
echo "</div>";

// Ejemplo de switch - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de estatuto switch</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$diaSemana = 3;

switch (\$diaSemana) {
    case 1:
        echo \"Lunes\";
        break;
    case 2:
        echo \"Martes\";
        break;
    case 3:
        echo \"Miércoles\";
        break;
    case 4:
        echo \"Jueves\";
        break;
    case 5:
        echo \"Viernes\";
        break;
    case 6:
    case 7:
        echo \"Fin de semana\";
        break;
    default:
        echo \"Día no válido\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$diaSemana = 3;
echo "Variable \$diaSemana = $diaSemana<br>";
switch ($diaSemana) {
    case 1:
        echo "Lunes<br>";
        break;
    case 2:
        echo "Martes<br>";
        break;
    case 3:
        echo "Miércoles<br>";
        break;
    case 4:
        echo "Jueves<br>";
        break;
    case 5:
        echo "Viernes<br>";
        break;
    case 6:
    case 7:
        echo "Fin de semana<br>";
        break;
    default:
        echo "Día no válido<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ol>";
echo "<li>La variable <code>\$diaSemana</code> tiene el valor 3</li>";
echo "<li>El switch compara <code>\$diaSemana</code> con cada uno de los casos</li>";
echo "<li>Cuando encuentra que <code>\$diaSemana == 3</code>, ejecuta el código correspondiente</li>";
echo "<li>El <code>break</code> evita que se ejecuten los casos siguientes</li>";
echo "<li>Note que los casos 6 y 7 comparten el mismo código (\"Fin de semana\")</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

// Comparación switch vs if-elseif
echo "<div style='background-color: #ffe5e8; padding: 15px; border-radius: 5px; margin-bottom: 15px; border-left: 5px solid #e74c3c;'>";
echo "<h4 style='color: #e74c3c;'>Switch vs If-Elseif:</h4>";

echo "<table style='width: 100%; border-collapse: collapse; margin-top: 10px;'>";
echo "<tr style='background-color: #f8d7da;'>";
echo "<th style='padding: 8px; border: 1px solid #e74c3c; text-align: left;'>Switch</th>";
echo "<th style='padding: 8px; border: 1px solid #e74c3c; text-align: left;'>If-Elseif</th>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #e74c3c;'>Compara una sola variable contra valores específicos</td>";
echo "<td style='padding: 8px; border: 1px solid #e74c3c;'>Puede evaluar múltiples condiciones independientes</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #e74c3c;'>Mejor legibilidad cuando se comparan múltiples valores exactos</td>";
echo "<td style='padding: 8px; border: 1px solid #e74c3c;'>Más flexible para condiciones complejas</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #e74c3c;'>Requiere <code>break</code> para evitar la ejecución en cascada</td>";
echo "<td style='padding: 8px; border: 1px solid #e74c3c;'>No requiere <code>break</code>, solo se ejecuta el primer bloque verdadero</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

// ======================= OPERADOR TERNARIO =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>5. OPERADOR TERNARIO</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del operador ternario:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Propósito:</strong> Forma abreviada de escribir una estructura if-else simple</li>";
echo "<li><strong>Ventaja:</strong> Permite asignar valores condicionales en una sola línea</li>";
echo "<li><strong>Uso:</strong> Ideal para condiciones simples y asignaciones condicionales</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("variable = (condición) ? valor_si_verdadero : valor_si_falso;");
echo "</code>";
echo "</div>";

// Ejemplo de operador ternario - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de operador ternario</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$estaRegistrado = true;

\$mensaje = \$estaRegistrado ? \"Bienvenido de nuevo\" : \"Necesita registrarse\";
echo \$mensaje;";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$estaRegistrado = true;
echo "Variable \$estaRegistrado = " . ($estaRegistrado ? "true" : "false") . "<br>";
$mensaje = $estaRegistrado ? "Bienvenido de nuevo" : "Necesita registrarse";
echo "Mensaje: $mensaje<br>";
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Equivalente con if-else:</strong>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "\$mensaje;
if (\$estaRegistrado) {
    \$mensaje = \"Bienvenido de nuevo\";
} else {
    \$mensaje = \"Necesita registrarse\";
}";
echo "</pre>";
echo "</div>";
echo "</div>";

// ======================= OPERADOR DE FUSIÓN NULL =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>6. OPERADOR DE FUSIÓN NULL (??)</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del operador de fusión null (??):</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Propósito:</strong> Proporciona un valor alternativo cuando una variable es null</li>";
echo "<li><strong>Disponibilidad:</strong> Introducido en PHP 7.0</li>";
echo "<li><strong>Uso:</strong> Ideal para asignar valores predeterminados</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("variable = expresión1 ?? expresión2;");
echo "</code>";
echo "<p style='margin-top: 10px; font-size: 14px;'>Devuelve expresión1 si existe y no es NULL, de lo contrario devuelve expresión2.</p>";
echo "</div>";

// Ejemplo de operador de fusión null - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de operador de fusión null</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$username = null;
\$nombreUsuario = \$username ?? \"Invitado\";
echo \$nombreUsuario;";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$username = null;
$nombreUsuario = $username ?? "Invitado";
echo "Nombre de usuario: $nombreUsuario<br>";
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Equivalente con el operador ternario:</strong>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "\$nombreUsuario = isset(\$username) && \$username !== null ? \$username : \"Invitado\";";
echo "</pre>";
echo "<strong>Diferencia importante:</strong> El operador ?? solo verifica si el valor es NULL, mientras que el operador ternario con isset() también verifica si la variable existe.";
echo "</div>";
echo "</div>";

// ======================= OPERADORES DE COMPARACIÓN =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>7. OPERADORES DE COMPARACIÓN</h2>";

echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<p>Los operadores de comparación son fundamentales en los estatutos de decisión ya que permiten evaluar condiciones.</p>";
echo "</div>";

// Tabla de operadores de comparación
echo "<div style='overflow-x: auto; margin-bottom: 20px;'>";
echo "<table style='width: 100%; border-collapse: collapse; margin-top: 10px;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Operador</th>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Nombre</th>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Descripción</th>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Ejemplo</th>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>==</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Igual</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si los valores son iguales</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 == \"5\"</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>===</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Idéntico</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si los valores son iguales y del mismo tipo</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 === \"5\"</code> es <code>false</code></td>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>!=</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Diferente</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si los valores son diferentes</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 != \"6\"</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>!==</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>No idéntico</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si los valores son diferentes o de distinto tipo</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 !== \"5\"</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code><</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Menor que</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si el valor izquierdo es menor que el derecho</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 < 10</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>></code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Mayor que</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si el valor izquierdo es mayor que el derecho</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>10 > 5</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code><=</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Menor o igual que</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si el valor izquierdo es menor o igual que el derecho</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 <= 5</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>>=</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Mayor o igual que</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verifica si el valor izquierdo es mayor o igual que el derecho</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>10 >= 10</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code><=></code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Operador nave espacial</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Devuelve -1, 0 o 1 según si el valor izquierdo es menor, igual o mayor que el derecho</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>5 <=> 10</code> es <code>-1</code></td>";
echo "</tr>";

echo "</table>";
echo "</div>";

// Ejemplo de comparación == vs === - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de operadores == vs ===</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$numero1 = 10;
\$numero2 = \"10\";

echo \"\$numero1 == \$numero2: \" . (\$numero1 == \$numero2 ? \"true\" : \"false\");
echo \"\\n\$numero1 === \$numero2: \" . (\$numero1 === \$numero2 ? \"true\" : \"false\");";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$numero1 = 10;
$numero2 = "10";
echo "Variable \$numero1 = $numero1 (integer)<br>";
echo "Variable \$numero2 = $numero2 (string)<br>";
echo "\$numero1 == \$numero2: " . ($numero1 == $numero2 ? "true" : "false") . " (compara solo valor)<br>";
echo "\$numero1 === \$numero2: " . ($numero1 === $numero2 ? "true" : "false") . " (compara valor y tipo)<br>";
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ul>";
echo "<li>El operador <code>==</code> (igualdad) compara solo los valores, ignorando el tipo de datos</li>";
echo "<li>El operador <code>===</code> (identidad) compara tanto los valores como el tipo de datos</li>";
echo "<li>En este ejemplo, <code>10</code> y <code>\"10\"</code> tienen el mismo valor pero diferentes tipos (integer vs string)</li>";
echo "<li>Por lo tanto, <code>==</code> devuelve <code>true</code>, pero <code>===</code> devuelve <code>false</code></li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= OPERADORES LÓGICOS =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>8. OPERADORES LÓGICOS</h2>";

echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<p>Los operadores lógicos se utilizan para combinar múltiples condiciones en los estatutos de decisión.</p>";
echo "</div>";

// Tabla de operadores lógicos
echo "<div style='overflow-x: auto; margin-bottom: 20px;'>";
echo "<table style='width: 100%; border-collapse: collapse; margin-top: 10px;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Operador</th>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Nombre</th>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Descripción</th>";
echo "<th style='padding: 10px; border: 1px solid #cccccc;'>Ejemplo</th>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>&&</code> o <code>and</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Y lógico</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verdadero si ambas condiciones son verdaderas</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>true && true</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>||</code> o <code>or</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>O lógico</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verdadero si al menos una condición es verdadera</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>true || false</code> es <code>true</code></td>";
echo "</tr>";

echo "<tr style='background-color: #f2f2f2;'>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>!</code> o <code>not</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>No lógico</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Invierte el valor de la condición</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>!true</code> es <code>false</code></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #cccccc; text-align: center;'><code>xor</code></td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>O exclusivo</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'>Verdadero si exactamente una condición es verdadera</td>";
echo "<td style='padding: 10px; border: 1px solid #cccccc;'><code>true xor false</code> es <code>true</code></td>";
echo "</tr>";

echo "</table>";
echo "</div>";

// Ejemplo de operadores lógicos - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de operadores lógicos</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$edad = 25;
\$esMiembro = true;

if (\$edad >= 18 && \$esMiembro) {
    echo \"Acceso completo al contenido\";
} elseif (\$edad >= 18 && !\$esMiembro) {
    echo \"Acceso parcial al contenido\";
} elseif (\$edad < 18 || !\$esMiembro) {
    echo \"Acceso restringido\";
}";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$edad = 25;
$esMiembro = true;
echo "Variable \$edad = $edad<br>";
echo "Variable \$esMiembro = " . ($esMiembro ? "true" : "false") . "<br><br>";
if ($edad >= 18 && $esMiembro) {
    echo "Acceso completo al contenido<br>";
} elseif ($edad >= 18 && !$esMiembro) {
    echo "Acceso parcial al contenido<br>";
} elseif ($edad < 18 || !$esMiembro) {
    echo "Acceso restringido<br>";
}
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong>";
echo "<ul>";
echo "<li><code>&&</code> (Y lógico): Ambas condiciones deben ser verdaderas</li>";
echo "<li><code>||</code> (O lógico): Al menos una condición debe ser verdadera</li>";
echo "<li><code>!</code> (No lógico): Invierte el valor de la condición</li>";
echo "<li>En este ejemplo, como <code>\$edad >= 18</code> Y <code>\$esMiembro</code> son verdaderos, se ejecuta el primer bloque</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= RESUMEN COMPARATIVO =======================
echo "<div style='background-color: #f2f8ff; padding: 15px; border-radius: 5px; border: 1px solid #3498db; margin-top: 30px;'>";
echo "<h3 style='color: #3498db; text-align: center;'>COMPARACIÓN DE ESTATUTOS DE DECISIÓN EN PHP</h3>";

echo "<table style='width: 100%; border-collapse: collapse; margin-top: 15px;'>";
echo "<thead style='background-color: #3498db; color: white;'>";
echo "<tr>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Estatuto</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Uso Ideal</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Ventajas</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Limitaciones</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>if</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Condiciones simples</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Sencillo y claro</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>No maneja alternativas</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>if-else</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Decisiones binarias</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Maneja dos alternativas</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Limitado a dos rutas</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>if-elseif-else</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Múltiples condiciones</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Flexible para condiciones complejas</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Puede volverse extenso</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>switch</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Comparar una variable con múltiples valores</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Mejor legibilidad para múltiples casos</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Requiere break para evitar cascada</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Operador ternario</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Asignaciones condicionales simples</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Conciso, ideal para una línea</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Difícil de leer si es complejo</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Operador ??</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Valores predeterminados para variables null</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Sintaxis limpia y concisa</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Solo para caso null, no otros falsy</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</div>";

// ======================= TIPS PRÁCTICOS =======================
echo "<div style='background-color: #fffaeb; padding: 15px; border-radius: 5px; border-left: 5px solid #f1c40f; margin-top: 30px;'>";
echo "<h3 style='color: #f39c12; text-align: center;'>CONSEJOS PRÁCTICOS PARA ESTATUTOS DE DECISIÓN</h3>";

echo "<ol style='padding-left: 20px;'>";
echo "<li><strong>Mantén las condiciones simples</strong> - Divide condiciones complejas en variables intermedias con nombres descriptivos</li>";
echo "<li><strong>Evita la anidación excesiva</strong> - Más de 3 niveles de anidación hacen que el código sea difícil de leer</li>";
echo "<li><strong>Usa los operadores de comparación adecuados</strong> - <code>===</code> suele ser más seguro que <code>==</code></li>";
echo "<li><strong>Considera el orden de las condiciones</strong> - Coloca primero las más probables o las más ligeras computacionalmente</li>";
echo "<li><strong>Utiliza bloques <code>{}</code> incluso para instrucciones de una sola línea</strong> - Mejora la legibilidad y previene errores</li>";
echo "<li><strong>Prefiere el operador ternario para asignaciones simples</strong> - Pero evítalo para lógica compleja</li>";
echo "<li><strong>No olvides los <code>break</code> en los switch</strong> - A menos que quieras la ejecución en cascada intencionalmente</li>";
echo "</ol>";
echo "</div>";

echo "</div>";
?>
