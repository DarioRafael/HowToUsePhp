<?php
/**
 * Ejemplos de Modularización en PHP
 * 
 * La modularización es el proceso de dividir un programa en módulos independientes.
 * En PHP, la modularización se implementa principalmente a través de funciones,
 * clases y archivos separados que pueden ser incluidos o requeridos.
 */

// Configuración para mostrar el resultado
echo "<div style='background-color: #f9f9f9; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); font-family: Arial, sans-serif;'>";
echo "<h1 style='color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 15px; margin-bottom: 25px;'>MODULARIZACIÓN EN PHP</h1>";

// INTRODUCCIÓN
echo "<div style='background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 30px;'>";
echo "<p style='font-size: 16px;'><strong>La Modularización</strong> es una técnica de programación que consiste en dividir un programa en partes independientes y reutilizables. En PHP, esto se logra principalmente mediante <span style='color: #e74c3c;'>funciones, clases, inclusión de archivos</span> y otras estructuras avanzadas como namespaces.</p>";
echo "</div>";

// Verificar si los archivos incluidos existen
$funciones_math_existe = file_exists('includes/funciones_matematicas.php');
$clase_usuario_existe = file_exists('includes/clase_usuario.php');

// Si existen, incluirlos
if ($funciones_math_existe) {
    include_once 'includes/funciones_matematicas.php';
}
if ($clase_usuario_existe) {
    include_once 'includes/clase_usuario.php';
}

// ======================= FUNCIONES EN PHP =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>1. FUNCIONES EN PHP</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>¿Qué son las funciones?</h3>";
echo "<p>Las funciones son bloques de código reutilizables que realizan una tarea específica. Permiten:</p>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Organizar el código en unidades lógicas</li>";
echo "<li>Evitar la repetición de código</li>";
echo "<li>Hacer el código más mantenible y legible</li>";
echo "</ul>";
echo "</div>";

// Sintaxis de función básica
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis básica:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("function nombreFuncion(\$parametro1, \$parametro2) {
    // Código a ejecutar
    
    return \$resultado; // Opcional: devuelve un valor
}");
echo "</code>";
echo "</div>";

// Ejemplo de función simple - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de función simple</h3>";

function saludar($nombre) {
    return "Hola, $nombre!";
}

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "function saludar(\$nombre) {
    return \"Hola, \$nombre!\";
}

\$nombre = \"María\";
echo saludar(\$nombre);";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$nombre = "María";
echo "Variable \$nombre = $nombre<br>";
echo "Resultado de llamar a la función saludar(): <strong>" . saludar($nombre) . "</strong>";
echo "</div>";
echo "</div>";

// ======================= FUNCIONES CON PARÁMETROS POR DEFECTO =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>2. FUNCIONES CON PARÁMETROS POR DEFECTO</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Permiten definir valores predeterminados para parámetros</li>";
echo "<li>Los parámetros con valores por defecto deben ir al final de la lista</li>";
echo "<li>Hacen que los argumentos sean opcionales al llamar a la función</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("function nombreFuncion(\$parametroRequerido, \$parametroOpcional1 = 'valor_por_defecto',
                    \$parametroOpcional2 = 'otro_valor_por_defecto') {
    // Código a ejecutar
    
    return \$resultado;
}");
echo "</code>";
echo "</div>";

// Ejemplo de función con parámetros por defecto - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo con parámetros por defecto</h3>";

function mostrarInformacion($nombre, $edad = 25, $ciudad = "Ciudad Victoria") {
    return "Nombre: $nombre, Edad: $edad, Ciudad: $ciudad";
}

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "function mostrarInformacion(\$nombre, \$edad = 25, \$ciudad = \"Ciudad Victoria\") {
    return \"Nombre: \$nombre, Edad: \$edad, Ciudad: \$ciudad\";
}

// Diferentes formas de llamar a la función
echo mostrarInformacion(\"Juan\", 30, \"Monterrey\");
echo mostrarInformacion(\"Pedro\", 28);
echo mostrarInformacion(\"Ana\");";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Llamada con todos los parámetros: <strong>" . mostrarInformacion("Juan", 30, "Monterrey") . "</strong><br>";
echo "Llamada solo con nombre y edad: <strong>" . mostrarInformacion("Pedro", 28) . "</strong><br>";
echo "Llamada solo con nombre: <strong>" . mostrarInformacion("Ana") . "</strong>";
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación:</strong><br>";
echo "- En el primer caso, proporcionamos los tres argumentos<br>";
echo "- En el segundo caso, omitimos <code>\$ciudad</code>, que toma su valor por defecto \"Ciudad Victoria\"<br>";
echo "- En el tercer caso, solo proporcionamos <code>\$nombre</code>, y tanto <code>\$edad</code> como <code>\$ciudad</code> toman sus valores por defecto";
echo "</div>";
echo "</div>";

// ======================= FUNCIONES CON NÚMERO VARIABLE DE ARGUMENTOS =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>3. FUNCIONES CON NÚMERO VARIABLE DE ARGUMENTOS</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Permiten pasar un número indefinido de argumentos a una función</li>";
echo "<li>Utilizan el operador de propagación (...) antes del nombre del parámetro</li>";
echo "<li>Los argumentos variables se recogen en un array dentro de la función</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("function nombreFuncion(...\$args) {
    // \$args es un array con todos los argumentos pasados
    
    // Podemos iterar sobre \$args
    foreach (\$args as \$argumento) {
        // Hacer algo con cada argumento
    }
    
    return \$resultado;
}");
echo "</code>";
echo "</div>";

// Ejemplo de función con número variable de argumentos - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo con argumentos variables</h3>";

function sumarNumeros(...$numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "function sumarNumeros(...\$numeros) {
    \$suma = 0;
    foreach (\$numeros as \$numero) {
        \$suma += \$numero;
    }
    return \$suma;
}

// Podemos llamar a la función con cualquier cantidad de argumentos
echo sumarNumeros(2, 4, 6);
echo sumarNumeros(1, 3, 5, 7, 9);";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Suma de 2, 4, 6: <strong>" . sumarNumeros(2, 4, 6) . "</strong><br>";
echo "Suma de 1, 3, 5, 7, 9: <strong>" . sumarNumeros(1, 3, 5, 7, 9) . "</strong>";
echo "</div>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Nota:</strong> También es posible combinar parámetros normales con parámetros variables, siempre que los variables estén al final:<br>";
echo "<code style='background-color: #2c3e50; color: #ecf0f1; padding: 5px; border-radius: 3px; margin-top: 5px; display: block;'>";
echo "function operacion(\$operador, ...\$numeros) { /* ... */ }";
echo "</code>";
echo "</div>";
echo "</div>";

// ======================= FUNCIONES ANÓNIMAS (LAMBDAS) =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>4. FUNCIONES ANÓNIMAS (LAMBDAS)</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Son funciones sin nombre que pueden asignarse a variables</li>";
echo "<li>Útiles como callbacks para funciones como array_map, array_filter, etc.</li>";
echo "<li>Pueden acceder a variables del ámbito externo usando la palabra clave <code>use</code></li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("\$variableFuncion = function(\$parametro1, \$parametro2) use (\$variableExterna) {
    // Código a ejecutar
    
    return \$resultado;
};

// Llamar a la función anónima
\$resultado = \$variableFuncion(\$argumento1, \$argumento2);");
echo "</code>";
echo "</div>";

// Ejemplo de función anónima - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de función anónima</h3>";

$duplicar = function($x) {
    return $x * 2;
};

$numeros = [1, 2, 3, 4, 5];

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$duplicar = function(\$x) {
    return \$x * 2;
};

\$numeros = [1, 2, 3, 4, 5];

// Usar la función anónima con array_map para procesar cada elemento del array
\$numerosDuplicados = array_map(\$duplicar, \$numeros);
echo implode(', ', \$numerosDuplicados);";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Arreglo original: <strong>" . implode(", ", $numeros) . "</strong><br>";
$numerosDuplicados = array_map($duplicar, $numeros);
echo "Arreglo después de aplicar la función anónima: <strong>" . implode(", ", $numerosDuplicados) . "</strong>";
echo "</div>";

// Ejemplo con "use" keyword
echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Ejemplo con palabra clave 'use':</strong><br>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 3px; margin-top: 5px;'>";
echo "\$factor = 3;
\$multiplicar = function(\$x) use (\$factor) {
    return \$x * \$factor;
};
// \$multiplicar ahora tiene acceso a la variable \$factor del ámbito externo";
echo "</pre>";
echo "</div>";
echo "</div>";

// ======================= FUNCIONES FLECHA (ARROW FUNCTIONS) =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>5. FUNCIONES FLECHA (ARROW FUNCTIONS)</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Introducidas en PHP 7.4</li>";
echo "<li>Sintaxis más concisa para funciones anónimas simples</li>";
echo "<li>Capturan automáticamente las variables del ámbito externo (sin 'use')</li>";
echo "<li>Limitadas a una sola expresión (no pueden contener bloques de código)</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("\$variableFuncion = fn(\$parametro) => expresión;

// Es equivalente a:
\$variableFuncion = function(\$parametro) use (\$var1, \$var2, ...) {
    return expresión;
};");
echo "</code>";
echo "</div>";

// Ejemplo de función flecha - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de función flecha</h3>";

$triplicar = fn($x) => $x * 3;

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "\$triplicar = fn(\$x) => \$x * 3;

\$numeros = [1, 2, 3, 4, 5];

// Usar la función flecha con array_map
\$numerosTriplicados = array_map(\$triplicar, \$numeros);
echo implode(', ', \$numerosTriplicados);";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Arreglo original: <strong>" . implode(", ", $numeros) . "</strong><br>";
$numerosTriplicados = array_map($triplicar, $numeros);
echo "Arreglo después de aplicar la función flecha: <strong>" . implode(", ", $numerosTriplicados) . "</strong>";
echo "</div>";

// Comparación con función anónima
echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Comparación con captura de variables:</strong><br>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 3px; margin-top: 5px;'>";
echo "// Función anónima con 'use'
\$factor = 4;
\$anonima = function(\$x) use (\$factor) { return \$x * \$factor; };

// Función flecha (capturas implícitas)
\$factor = 4;
\$flecha = fn(\$x) => \$x * \$factor;";
echo "</pre>";
echo "</div>";
echo "</div>";

// ======================= FUNCIONES RECURSIVAS =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>6. FUNCIONES RECURSIVAS</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Son funciones que se llaman a sí mismas</li>";
echo "<li>Necesitan una condición de terminación para evitar bucles infinitos</li>";
echo "<li>Útiles para resolver problemas que pueden descomponerse en subproblemas similares</li>";
echo "<li>Eficaces para recorrer estructuras de datos jerárquicas como árboles</li>";
echo "</ul>";
echo "</div>";

// Ejemplo de función recursiva - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de función recursiva: Factorial</h3>";

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "function factorial(\$n) {
    // Condición de terminación
    if (\$n <= 1) {
        return 1;
    } else {
        // Llamada recursiva
        return \$n * factorial(\$n - 1);
    }
}

echo \"Factorial de 5: \" . factorial(5);";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Factorial de 5: <strong>" . factorial(5) . "</strong>";
echo "</div>";

// Explicación de cómo funciona
echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Explicación del proceso recursivo:</strong><br>";
echo "factorial(5)<br>";
echo "└── 5 * factorial(4) = 5 * 24 = 120<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;└── 4 * factorial(3) = 4 * 6 = 24<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── 3 * factorial(2) = 3 * 2 = 6<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── 2 * factorial(1) = 2 * 1 = 2<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── factorial(1) = 1 (caso base)";
echo "</div>";
echo "</div>";

// ======================= IMPORTAR ARCHIVOS EN PHP =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>7. IMPORTAR ARCHIVOS EN PHP</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Funciones para importar archivos:</h3>";
echo "<table style='width: 100%; border-collapse: collapse; margin-top: 10px;'>";
echo "<tr style='background-color: #d4f7d4;'>";
echo "<th style='padding: 8px; border: 1px solid #27ae60; text-align: left;'>Función</th>";
echo "<th style='padding: 8px; border: 1px solid #27ae60; text-align: left;'>Descripción</th>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'><code>include</code></td>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'>Incluye y evalúa un archivo. Si el archivo no existe, genera un warning.</td>";
echo "</tr>";
echo "<tr style='background-color: #f0f7f0;'>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'><code>require</code></td>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'>Similar a include, pero genera un error fatal si el archivo no existe.</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'><code>include_once</code></td>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'>Incluye el archivo solo una vez, aunque se llame múltiples veces.</td>";
echo "</tr>";
echo "<tr style='background-color: #f0f7f0;'>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'><code>require_once</code></td>";
echo "<td style='padding: 8px; border: 1px solid #27ae60;'>Requiere el archivo solo una vez, genera error fatal si no existe.</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Sintaxis:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("// Incluir un archivo
include 'ruta/al/archivo.php';

// Requerir un archivo (error fatal si no existe)
require 'ruta/al/archivo.php';

// Incluir solo una vez
include_once 'ruta/al/archivo.php';

// Requerir solo una vez
require_once 'ruta/al/archivo.php';");
echo "</code>";
echo "</div>";

// Ejemplo de importación - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de importación de archivos</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Archivo: includes/funciones_matematicas.php
<?php
function areaCirculo(\$radio) {
    return pi() * pow(\$radio, 2);
}

function perimetroRectangulo(\$ancho, \$alto) {
    return 2 * (\$ancho + \$alto);
}
?>

// Archivo principal
<?php
// Incluir el archivo de funciones
require_once 'includes/funciones_matematicas.php';

// Ahora podemos usar las funciones definidas en ese archivo
echo 'Área de un círculo con radio 5: ' . areaCirculo(5);
echo 'Perímetro de un rectángulo de 4x6: ' . perimetroRectangulo(4, 6);
?>";
echo "</pre>";

if ($funciones_math_existe && function_exists('areaCirculo') && function_exists('perimetroRectangulo')) {
   echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
   echo "<strong>Resultado:</strong><br>";
   echo "Área de un círculo con radio 5: <strong>" . areaCirculo(5) . "</strong><br>";
   echo "Perímetro de un rectángulo de 4x6: <strong>" . perimetroRectangulo(4, 6) . "</strong>";
   echo "</div>";
} else {
   echo "<div style='background-color: #ffebee; padding: 15px; border-radius: 5px; border-left: 4px solid #c62828;'>";
   echo "<strong style='color: #c62828;'>Nota:</strong> Los archivos de funciones matemáticas no están disponibles. Para ver el ejemplo completo, cree el directorio 'includes' con los archivos necesarios.";
   echo "</div>";
}

// Ventajas de la modularización con include
echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Ventajas de la modularización con include/require:</strong>";
echo "<ul>";
echo "<li>Organiza el código en archivos separados por funcionalidad</li>";
echo "<li>Facilita la reutilización de código en diferentes proyectos</li>";
echo "<li>Mejora la mantenibilidad al dividir el código en unidades lógicas</li>";
echo "<li>Permite el trabajo en equipo donde diferentes desarrolladores trabajan en diferentes módulos</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= CLASES Y OBJETOS COMO MÓDULOS =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>8. CLASES Y OBJETOS COMO MÓDULOS</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Ventajas de la POO para modularización:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Encapsula datos y comportamientos relacionados en una sola unidad</li>";
echo "<li>Facilita la reutilización mediante herencia y composición</li>";
echo "<li>Mejora la legibilidad y mantenibilidad del código</li>";
echo "<li>Permite modelar entidades del mundo real de forma más natural</li>";
echo "</ul>";
echo "</div>";

// Ejemplo de clase como módulo - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de clase como módulo</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Archivo: includes/clase_usuario.php
<?php
class Usuario {
   private \$nombre;
   private \$email;
   
   public function __construct(\$nombre, \$email) {
       \$this->nombre = \$nombre;
       \$this->email = \$email;
   }
   
   public function obtenerInformacion() {
       return \"Nombre: {\$this->nombre}, Email: {\$this->email}\";
   }
   
   public function cambiarEmail(\$nuevoEmail) {
       \$this->email = \$nuevoEmail;
   }
}
?>

// Archivo principal
<?php
// Incluir la clase
require_once 'includes/clase_usuario.php';

// Crear una instancia de Usuario
\$usuario = new Usuario(\"Carlos\", \"carlos@ejemplo.com\");

// Usar los métodos de la clase
echo \$usuario->obtenerInformacion();

// Modificar el objeto
\$usuario->cambiarEmail(\"carlos.nuevo@ejemplo.com\");
echo \$usuario->obtenerInformacion();
?>";
echo "</pre>";

if ($clase_usuario_existe && class_exists('Usuario')) {
   $usuario = new Usuario("Carlos", "carlos@ejemplo.com");
   echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
   echo "<strong>Resultado:</strong><br>";
   echo "Usuario creado: <strong>" . $usuario->obtenerInformacion() . "</strong><br>";
   $usuario->cambiarEmail("carlos.nuevo@ejemplo.com");
   echo "Usuario después de cambiar email: <strong>" . $usuario->obtenerInformacion() . "</strong>";
   echo "</div>";
} else {
   echo "<div style='background-color: #ffebee; padding: 15px; border-radius: 5px; border-left: 4px solid #c62828;'>";
   echo "<strong style='color: #c62828;'>Nota:</strong> La clase Usuario no está disponible. Para ver el ejemplo completo, cree el directorio 'includes' con los archivos necesarios.";
   echo "</div>";
}
echo "</div>";

// ======================= ESPACIOS DE NOMBRES (NAMESPACES) =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>9. ESPACIOS DE NOMBRES (NAMESPACES)</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características de los namespaces:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li>Permiten organizar el código en grupos lógicos</li>";
echo "<li>Evitan conflictos de nombres entre clases, funciones y constantes</li>";
echo "<li>Posibilitan la creación de paquetes de código reusables</li>";
echo "<li>Facilitan la carga automática de clases (autoloading)</li>";
echo "</ul>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Definición de un namespace:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("<?php
// Definir un namespace - debe ser la primera instrucción del archivo
namespace MiAplicacion\\Modulo;

// Definir una clase en este namespace
class MiClase {
   // ...
}

// Definir una función en este namespace
function miFuncion() {
   // ...
}

// Definir una constante en este namespace
const MI_CONSTANTE = 'valor';
?>");
echo "</code>";
echo "</div>";

// Ejemplo de uso de namespaces - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de uso de namespaces</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Archivo: src/MiAplicacion/Usuarios/Usuario.php
<?php
namespace MiAplicacion\\Usuarios;

class Usuario {
   private \$nombre;
   
   public function __construct(\$nombre) {
       \$this->nombre = \$nombre;
   }
   
   public function saludar() {
       return \"Hola, soy {\$this->nombre}\";
   }
}
?>

// Archivo: src/MiAplicacion/Productos/Producto.php
<?php
namespace MiAplicacion\\Productos;

class Producto {
   private \$nombre;
   
   public function __construct(\$nombre) {
       \$this->nombre = \$nombre;
   }
   
   public function obtenerNombre() {
       return \$this->nombre;
   }
}
?>

// Archivo principal
<?php
// Usar clases de diferentes namespaces
use MiAplicacion\\Usuarios\\Usuario;
use MiAplicacion\\Productos\\Producto as ProductoTienda;

// Crear instancias
\$usuario = new Usuario('Juan');
\$producto = new ProductoTienda('Laptop');

echo \$usuario->saludar();
echo \"Producto: \" . \$producto->obtenerNombre();
?>";
echo "</pre>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Notas importantes sobre namespaces:</strong>";
echo "<ul>";
echo "<li>La declaración del namespace debe ser la primera instrucción en el archivo PHP</li>";
echo "<li>Se puede usar el alias <code>as</code> para renombrar las clases importadas</li>";
echo "<li>Para referirse a una clase del namespace global, use <code>\\NombreClase</code></li>";
echo "<li>Los namespaces anidados se separan con <code>\\</code> (barra invertida)</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= AUTOLOADING DE CLASES =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>10. AUTOLOADING DE CLASES</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>¿Qué es el autoloading?</h3>";
echo "<p>El autoloading es un mecanismo que permite cargar automáticamente las clases cuando se necesitan, sin tener que usar require/include para cada archivo de clase. Esto facilita enormemente la modularización de grandes aplicaciones.</p>";
echo "</div>";

// Sintaxis
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Registro de una función de autoloading:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("<?php
// Registrar una función de autoloading
spl_autoload_register(function (\$nombreClase) {
   // Convertir namespace separadores \\ a separadores de directorio /
   \$archivo = str_replace('\\\\', DIRECTORY_SEPARATOR, \$nombreClase) . '.php';
   
   // Verificar si el archivo existe
   if (file_exists(\$archivo)) {
       require \$archivo;
   }
});

// Ahora podemos usar cualquier clase sin incluirla manualmente
\$objeto = new MiNamespace\\MiClase(); // Cargará automáticamente MiNamespace/MiClase.php
?>");
echo "</code>";
echo "</div>";

// Ejemplo de autoloading - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de estructura para autoloading</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Estructura de directorios
/*
proyecto/
├── autoload.php
├── index.php
└── src/
   ├── App/
   │   ├── Controllers/
   │   │   └── UserController.php  (namespace App\\Controllers)
   │   └── Models/
   │       └── User.php            (namespace App\\Models)
   └── Core/
       └── Database.php            (namespace Core)
*/

// Archivo: autoload.php
<?php
spl_autoload_register(function (\$class) {
   // Directorio base para las clases
   \$baseDir = __DIR__ . '/src/';
   
   // Reemplazar separadores de namespace con separadores de directorio
   \$file = \$baseDir . str_replace('\\\\', '/', \$class) . '.php';
   
   // Si el archivo existe, incluirlo
   if (file_exists(\$file)) {
       require \$file;
   }
});
?>

// Archivo: index.php
<?php
// Incluir el autoloader
require_once 'autoload.php';

// Usar clases de diferentes partes de la aplicación
\$usuario = new App\\Models\\User();
\$controller = new App\\Controllers\\UserController();
\$db = new Core\\Database();

// Las clases se cargarán automáticamente cuando se necesiten
?>";
echo "</pre>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Ventajas del autoloading:</strong>";
echo "<ul>";
echo "<li>Elimina la necesidad de múltiples declaraciones <code>require/include</code></li>";
echo "<li>Carga las clases solo cuando se necesitan (optimización)</li>";
echo "<li>Facilita seguir convenciones como PSR-4 para la estructura de código</li>";
echo "<li>Es esencial para aplicaciones grandes y frameworks</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= COMPOSER COMO GESTOR DE DEPENDENCIAS =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; margin-top: 30px;'>11. COMPOSER COMO GESTOR DE DEPENDENCIAS</h2>";

// Explicación
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>¿Qué es Composer?</h3>";
echo "<p>Composer es un gestor de dependencias para PHP que permite declarar, descargar y gestionar las bibliotecas externas que utiliza tu proyecto. Además, proporciona un sistema de autoloading compatible con PSR-4.</p>";
echo "</div>";

// Configuración de Composer
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 20px;'>";
echo "<h4 style='color: #66d9ef; margin-top: 0;'>Archivo composer.json:</h4>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("{
   \"name\": \"miempresa/miproyecto\",
   \"description\": \"Descripción de mi proyecto\",
   \"type\": \"project\",
   \"require\": {
       \"php\": \">=7.4\",
       \"monolog/monolog\": \"^2.0\",
       \"symfony/http-foundation\": \"^5.0\"
   },
   \"require-dev\": {
       \"phpunit/phpunit\": \"^9.0\"
   },
   \"autoload\": {
       \"psr-4\": {
           \"MiAplicacion\\\\\": \"src/\"
       }
   },
   \"autoload-dev\": {
       \"psr-4\": {
           \"Tests\\\\\": \"tests/\"
       }
   }
}");
echo "</code>";
echo "</div>";

// Ejemplo de uso de Composer - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 25px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de uso de Composer</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
echo "// Instalar dependencias (desde la línea de comandos)
// $ composer install

// Archivo: index.php
<?php
// Incluir el autoloader de Composer
require 'vendor/autoload.php';

// Usar bibliotecas externas
use Monolog\\Logger;
use Monolog\\Handler\\StreamHandler;

// Usar clases de tu propia aplicación (autoloaded según PSR-4)
use MiAplicacion\\Controllers\\HomeController;

// Crear un logger
\$log = new Logger('nombre');
\$log->pushHandler(new StreamHandler('logs/app.log', Logger::WARNING));

// Registrar un mensaje
\$log->warning('Esto es un mensaje de advertencia');

// Usar tu propia clase
\$controller = new HomeController();
\$controller->mostrarInicio();
?>";
echo "</pre>";

echo "<div style='margin-top: 15px; background-color: #e3f2fd; padding: 10px; border-radius: 5px; border-left: 4px solid #2196F3;'>";
echo "<strong>Ventajas de Composer:</strong>";
echo "<ul>";
echo "<li>Gestión de dependencias automatizada</li>";
echo "<li>Autoloading optimizado según estándares PSR</li>";
echo "<li>Facilita la reutilización de paquetes de código de la comunidad</li>";
echo "<li>Maneja las versiones y dependencias transitivas</li>";
echo "<li>Se ha convertido en el estándar de facto para proyectos PHP modernos</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= RESUMEN COMPARATIVO =======================
echo "<div style='background-color: #f2f8ff; padding: 15px; border-radius: 5px; border: 1px solid #3498db; margin-top: 30px;'>";
echo "<h3 style='color: #3498db; text-align: center;'>COMPARACIÓN DE TÉCNICAS DE MODULARIZACIÓN EN PHP</h3>";

echo "<table style='width: 100%; border-collapse: collapse; margin-top: 15px;'>";
echo "<thead style='background-color: #3498db; color: white;'>";
echo "<tr>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Técnica</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Uso Ideal</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Ventajas</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Limitaciones</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Funciones</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Operaciones reutilizables simples</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Fácil de implementar, bajo acoplamiento</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>No encapsula estado, limitada a operaciones simples</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Include/Require</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Compartir código entre archivos</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Simple, funciona en todas las versiones</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Puede causar conflictos de nombres</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Clases/Objetos</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Modelar entidades y comportamientos</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Encapsula datos y funcionalidad</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Más verboso para operaciones simples</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Namespaces</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Organizar código en proyectos grandes</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Evita conflictos de nombres</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Requiere PHP 5.3+, cierta complejidad</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Autoloading</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Cargar clases bajo demanda</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Elimina requires/includes manuales</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Requiere convención de nombres/directorios</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Composer</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Gestionar dependencias externas</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Estándar en PHP moderno, autoloading</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Requiere aprendizaje, dependencia externa</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</div>";

// ======================= CONSEJOS PRÁCTICOS =======================
echo "<div style='background-color: #fffaeb; padding: 15px; border-radius: 5px; border-left: 5px solid #f1c40f; margin-top: 30px;'>";
echo "<h3 style='color: #f39c12; text-align: center;'>CONSEJOS PRÁCTICOS PARA MODULARIZACIÓN</h3>";

echo "<ol style='padding-left: 20px;'>";
echo "<li><strong>Principio de Responsabilidad Única</strong> - Cada módulo debe tener una sola razón para cambiar</li>";
echo "<li><strong>Bajo acoplamiento, alta cohesión</strong> - Minimiza dependencias entre módulos, maximiza relaciones dentro de ellos</li>";
echo "<li><strong>Utiliza interfaces</strong> - Define contratos para tus módulos, facilitando su sustitución e interoperabilidad</li>";
echo "<li><strong>Sigue estándares</strong> - Adopta convenciones como PSR-4 para estructura de directorios y nombres</li>";
echo "<li><strong>Piensa en la reutilización</strong> - Diseña módulos que puedan usarse en diferentes contextos o proyectos</li>";
echo "<li><strong>Documenta tus módulos</strong> - Incluye información sobre propósito, uso y parámetros</li>";
echo "<li><strong>Testea cada módulo</strong> - Asegura que cada componente funciona correctamente de forma aislada</li>";
echo "</ol>";
echo "</div>";

echo "</div>";
?>
