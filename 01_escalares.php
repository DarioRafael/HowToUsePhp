<?php
/**
 * Ejemplos de Tipos de Datos Escalares en PHP
 * 
 * Los tipos de datos escalares son tipos básicos que representan un solo valor.
 * PHP tiene cuatro tipos de datos escalares: integer, float, string y boolean.
 */

// Configuración para mostrar el resultado
echo "<div style='background-color: #f9f9f9; padding: 25px; border-radius: 8px; font-family: Arial, sans-serif; max-width: 1000px; margin: 0 auto;'>";
echo "<h1 style='color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 15px; margin-bottom: 25px;'>TIPOS DE DATOS ESCALARES EN PHP</h1>";

// INTRODUCCIÓN
echo "<div style='background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 30px;'>";
echo "<p style='font-size: 16px;'><strong>Los Tipos de Datos Escalares</strong> son los bloques fundamentales de PHP. Cada variable en PHP almacena un valor de un tipo específico, y los tipos escalares son los más básicos y representan un único valor. PHP tiene cuatro tipos escalares: <span style='color: #e74c3c;'>integer, float, string y boolean</span>.</p>";
echo "</div>";

// ======================= 1. INTEGER (ENTERO) =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>1. INTEGER (ENTERO)</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Un integer es un número entero (sin decimales) que puede ser positivo, negativo o cero.</p>";
echo "<p><strong>Rango:</strong> Normalmente entre -2,147,483,648 y 2,147,483,647 (32-bit). En sistemas de 64-bit, el rango es mucho mayor.</p>";
echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Entero decimal (base 10)
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Enteros Decimales</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$entero = 42;</code>";
echo "</div>";
$entero = 42;
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $entero . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($entero) . ")</span>";
echo "</div>";
echo "</div>";

// Entero negativo
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Enteros Negativos</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$entero_negativo = -15;</code>";
echo "</div>";
$entero_negativo = -15;
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $entero_negativo . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($entero_negativo) . ")</span>";
echo "</div>";
echo "</div>";

echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Entero en otras bases
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Notaciones Alternativas</h3>";
echo "<div style='margin-bottom: 15px;'>";
echo "<p><strong>Octal (base 8):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$entero_octal = 0755; // prefijo 0</code>";
echo "</div>";
$entero_octal = 0755;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong> " . $entero_octal . " <span style='color: #7f8c8d;'>(equivalente a 493 en decimal)</span>";
echo "</div>";

echo "<p><strong>Hexadecimal (base 16):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$entero_hex = 0xFF; // prefijo 0x</code>";
echo "</div>";
$entero_hex = 0xFF;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong> " . $entero_hex . " <span style='color: #7f8c8d;'>(equivalente a 255 en decimal)</span>";
echo "</div>";

echo "<p><strong>Binario (base 2):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$entero_binario = 0b1010; // prefijo 0b</code>";
echo "</div>";
$entero_binario = 0b1010;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $entero_binario . " <span style='color: #7f8c8d;'>(equivalente a 10 en decimal)</span>";
echo "</div>";
echo "</div>";
echo "</div>";

// Características adicionales
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Características Adicionales</h3>";

echo "<p><strong>Separador de dígitos (PHP 7.4+):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$entero_legible = 1_000_000;</code>";
echo "</div>";
$entero_legible = 1_000_000;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $entero_legible . " <span style='color: #7f8c8d;'>(Mejora la legibilidad sin afectar el valor)</span>";
echo "</div>";

echo "<p><strong>Operaciones básicas:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$resultado = \$entero * 2;</code>";
echo "</div>";
$resultado = $entero * 2;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $resultado . " <span style='color: #7f8c8d;'>(42 * 2)</span>";
echo "</div>";
echo "</div>";

echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo:</h4>";
echo "<p>En PHP, los enteros se convierten automáticamente a flotantes cuando el resultado de una operación excede el tamaño máximo permitido para un entero en el sistema.</p>";
echo "</div>";
echo "</div>";

// ======================= 2. FLOAT (PUNTO FLOTANTE) =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>2. FLOAT (PUNTO FLOTANTE)</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Un float (o double) es un número con punto decimal o en notación exponencial.</p>";
echo "<p><strong>Precisión:</strong> PHP utiliza el formato de doble precisión IEEE 754, que ofrece aproximadamente 14 dígitos decimales de precisión.</p>";
echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Notación decimal
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Notación Decimal</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$flotante = 3.14159;</code>";
echo "</div>";
$flotante = 3.14159;
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $flotante . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($flotante) . ")</span>";
echo "</div>";
echo "</div>";

// Notación científica
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Notación Científica</h3>";
echo "<div style='margin-bottom: 15px;'>";
echo "<p><strong>Exponente positivo:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$flotante_cientifico = 1.2e3; // 1.2 * 10^3</code>";
echo "</div>";
$flotante_cientifico = 1.2e3;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $flotante_cientifico . " <span style='color: #7f8c8d;'>(1.2 * 1000 = 1200)</span>";
echo "</div>";

echo "<p><strong>Exponente negativo:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$flotante_cientifico_neg = 7e-3; // 7 * 10^-3</code>";
echo "</div>";
$flotante_cientifico_neg = 7e-3;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $flotante_cientifico_neg . " <span style='color: #7f8c8d;'>(7 * 0.001 = 0.007)</span>";
echo "</div>";
echo "</div>";
echo "</div>";

echo "</div>";

// Operaciones con flotantes
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin: 15px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Funciones Matemáticas para Flotantes</h3>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 15px;'>";
// Redondeo
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Redondeo:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>round(\$flotante, 2); // Redondea a 2 decimales</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . round($flotante, 2);
echo "</div>";
echo "</div>";

// Techo
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Techo (ceil):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>ceil(\$flotante); // Redondea hacia arriba</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ceil($flotante);
echo "</div>";
echo "</div>";

// Piso
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Piso (floor):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>floor(\$flotante); // Redondea hacia abajo</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . floor($flotante);
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Precaución con los Flotantes:</h4>";
echo "<p>Debido a la forma en que se almacenan internamente, las comparaciones directas entre flotantes pueden dar resultados inesperados. Por ejemplo:</p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "<code>0.1 + 0.2 == 0.3  // Puede devolver false</code>";
echo "</div>";
echo "<p>Para comparaciones seguras, use una pequeña tolerancia o la función <code>number_format()</code>.</p>";
echo "</div>";
echo "</div>";

// ======================= 3. STRING (CADENA DE TEXTO) =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>3. STRING (CADENA DE TEXTO)</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Un string es una serie de caracteres que puede contener letras, números, símbolos y espacios.</p>";
echo "<p><strong>Codificación:</strong> PHP maneja strings como una secuencia de bytes. Por defecto, cada carácter ocupa un byte, pero para caracteres Unicode (como é, ñ, 中) puede necesitar varios bytes.</p>";
echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Comillas simples
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Comillas Simples</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$cadena_simple = 'Hola, PHP!';</code>";
echo "</div>";
$cadena_simple = 'Hola, PHP!';
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $cadena_simple;
echo "</div>";

$nombre = 'Juan';
echo "<p><strong>Comportamiento con variables:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$nombre = 'Juan';<br>\$saludo_simple = 'Hola \$nombre, bienvenido';</code>";
echo "</div>";
$saludo_simple = 'Hola $nombre, bienvenido';
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . htmlspecialchars($saludo_simple) . " <span style='color: #7f8c8d;'>(Las variables NO se interpretan)</span>";
echo "</div>";
echo "</div>";

// Comillas dobles
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Comillas Dobles</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$cadena_doble = \"Hola, mundo!\";</code>";
echo "</div>";
$cadena_doble = "Hola, mundo!";
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $cadena_doble;
echo "</div>";

echo "<p><strong>Comportamiento con variables:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$nombre = 'Juan';<br>\$saludo_doble = \"Hola \$nombre, bienvenido\";</code>";
echo "</div>";
$saludo_doble = "Hola $nombre, bienvenido";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . htmlspecialchars($saludo_doble) . " <span style='color: #7f8c8d;'>(Las variables SÍ se interpretan)</span>";
echo "</div>";
echo "</div>";

echo "</div>";

// Secuencias de escape y sintaxis heredoc/nowdoc
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Secuencias de escape
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Secuencias de Escape</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$cadena_escape = \"Primera línea\\nSegunda línea\\tTabulación\";</code>";
echo "</div>";
$cadena_escape = "Primera línea\nSegunda línea\tTabulación";
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado (código fuente):</strong><br>";
echo "<pre>" . htmlspecialchars($cadena_escape) . "</pre>";
echo "<span style='color: #7f8c8d;'>Secuencias comunes: \\n (nueva línea), \\t (tabulación), \\r (retorno), \\$ (símbolo $), \\\" (comilla doble)</span>";
echo "</div>";
echo "</div>";

// Heredoc y Nowdoc
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Heredoc y Nowdoc</h3>";

// Heredoc
echo "<p><strong>Heredoc (interpreta variables):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$heredoc = <<<EOD<br>Texto en múltiples líneas<br>   con formato preservado<br>y variables como \$nombre interpretadas<br>EOD;</code>";
echo "</div>";
$heredoc = <<<EOD
Texto en múltiples líneas
   con formato preservado
y variables como $nombre interpretadas
EOD;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre>" . htmlspecialchars($heredoc) . "</pre>";
echo "</div>";

// Nowdoc
echo "<p><strong>Nowdoc (no interpreta variables):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$nowdoc = <<<'EOD'<br>Texto en múltiples líneas<br>   con formato preservado<br>pero variables como \$nombre NO interpretadas<br>EOD;</code>";
echo "</div>";
$nowdoc = <<<'EOD'
Texto en múltiples líneas
   con formato preservado
pero variables como $nombre NO interpretadas
EOD;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre>" . htmlspecialchars($nowdoc) . "</pre>";
echo "</div>";
echo "</div>";

echo "</div>";

// Funciones para strings
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Funciones Comunes para Strings</h3>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 15px;'>";
// strlen
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Longitud:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>strlen(\$cadena_doble);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . strlen($cadena_doble) . " caracteres";
echo "</div>";
echo "</div>";

// strtoupper
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Convertir a mayúsculas:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>strtoupper(\$cadena_doble);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . strtoupper($cadena_doble);
echo "</div>";
echo "</div>";

// substr
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Extraer subcadena:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>substr(\$cadena_doble, 0, 4);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . substr($cadena_doble, 0, 4);
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo para Strings:</h4>";
echo "<p>PHP proporciona más de 100 funciones para manipular strings. Algunas de las más útiles incluyen <code>str_replace()</code>, <code>explode()</code>, <code>implode()</code>, <code>trim()</code> y <code>strpos()</code>.</p>";
echo "</div>";
echo "</div>";

// ======================= 4. BOOLEAN (BOOLEANO) =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>4. BOOLEAN (BOOLEANO)</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Un booleano representa un valor de verdad, que puede ser verdadero (true) o falso (false).</p>";
echo "<p><strong>Uso:</strong> Se utilizan principalmente en expresiones condicionales, como declaraciones if, while, etc.</p>";
echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Valor true
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Valor TRUE</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$verdadero = true;</code>";
echo "</div>";
$verdadero = true;
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ($verdadero ? "true" : "false") . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($verdadero) . ")</span>";
echo "</div>";
echo "</div>";

// Valor false
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Valor FALSE</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$falso = false;</code>";
echo "</div>";
$falso = false;
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ($falso ? "true" : "false") . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($falso) . ")</span>";
echo "</div>";
echo "</div>";

echo "</div>";

// Expresiones que evalúan a booleano
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Expresiones que Evalúan a Booleano</h3>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 15px;'>";
// Comparación mayor que
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Comparación (mayor que):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$es_mayor = (10 > 5);</code>";
echo "</div>";
$es_mayor = (10 > 5);
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ($es_mayor ? "true" : "false");
echo "</div>";
echo "</div>";

// Comparación de igualdad (no estricta)
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Igualdad (==):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$es_igual = (10 == \"10\");</code>";
echo "</div>";
$es_igual = (10 == "10");
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ($es_igual ? "true" : "false") . " <span style='color: #7f8c8d;'>(Compara solo valor)</span>";
echo "</div>";
echo "</div>";

// Comparación de identidad (estricta)
echo "<div style='flex: 1; min-width: 300px;'>";
echo "<p><strong>Identidad (===):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$es_identico = (10 === \"10\");</code>";
echo "</div>";
$es_identico = (10 === "10");
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ($es_identico ? "true" : "false") . " <span style='color: #7f8c8d;'>(Compara valor y tipo)</span>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

// Valores que se evalúan como false
echo "<div style='background-color: #f9ebea; padding: 15px; border-radius: 8px; margin: 20px 0;'>";
echo "<h3 style='color: #c0392b; border-bottom: 1px solid #e74c3c; padding-bottom: 8px;'>Valores que se Evalúan como FALSE</h3>";
echo "<p>En PHP, los siguientes valores se evalúan como <code>false</code> en contextos booleanos:</p>";
echo "<ul style='margin-top: 10px;'>";
echo "<li>El booleano <code>false</code></li>";
echo "<li>El entero <code>0</code> y el flotante <code>0.0</code></li>";
echo "<li>La cadena vacía <code>\"\"</code> o <code>''</code></li>";
echo "<li>La cadena <code>\"0\"</code></li>";
echo "<li>Un array sin elementos</li>";
echo "<li>El valor <code>NULL</code></li>";
echo "</ul>";

// Demostración de valores falsy
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin: 15px 0;'>";
echo "<code>// Ejemplos de valores falsy<br>";
echo "if (0) { echo \"Esto no se ejecutará\"; }<br>";
echo "if (\"\") { echo \"Esto no se ejecutará\"; }<br>";
echo "if (null) { echo \"Esto no se ejecutará\"; }<br>";
echo "if ([]) { echo \"Esto no se ejecutará\"; }</code>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo para Booleanos:</h4>";
echo "<p>En PHP, todas las expresiones tienen un valor booleano implícito. Al usar un valor no booleano en un contexto que requiere un booleano, PHP lo convertirá automáticamente según las reglas mencionadas anteriormente.</p>";
echo "</div>";
echo "</div>";

// ======================= 5. CONVERSIÓN DE TIPOS (TYPE CASTING) =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>5. CONVERSIÓN DE TIPOS (TYPE CASTING)</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> La conversión de tipos (type casting) permite cambiar el tipo de dato de una variable a otro.</p>";
echo "<p><strong>Importancia:</strong> Es crucial en PHP, ya que es un lenguaje de tipado débil/dinámico donde las variables pueden cambiar de tipo durante la ejecución.</p>";
echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Conversión con operadores de casteo
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Operadores de Casteo</h3>";

// Integer a String
echo "<p><strong>Integer a String:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$numero = 123;<br>\$numeroString = (string)\$numero;</code>";
echo "</div>";
$numero = 123;
$numeroString = (string)$numero;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $numeroString . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($numeroString) . ")</span>";
echo "</div>";

// String a Integer
echo "<p><strong>String a Integer:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$texto = \"456\";<br>\$textoNumero = (int)\$texto;</code>";
echo "</div>";
$texto = "456";
$textoNumero = (int)$texto;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $textoNumero . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($textoNumero) . ")</span>";
echo "</div>";

// Integer a Float
echo "<p><strong>Integer a Float:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$enteroFloat = (float)42;</code>";
echo "</div>";
$enteroFloat = (float)42;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $enteroFloat . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($enteroFloat) . ")</span>";
echo "</div>";

// Valor a Boolean
echo "<p><strong>Valor a Boolean:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$numeroBoolean = (bool)100;</code>";
echo "</div>";
$numeroBoolean = (bool)100;
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . ($numeroBoolean ? "true" : "false") . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($numeroBoolean) . ")</span>";
echo "</div>";
echo "</div>";

// Conversión con funciones
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Funciones de Conversión</h3>";

// intval
echo "<p><strong>intval():</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$intval = intval(\"42.7\");</code>";
echo "</div>";
$intval = intval("42.7");
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $intval . " <span style='color: #7f8c8d;'>(Trunca el valor decimal)</span>";
echo "</div>";

// floatval
echo "<p><strong>floatval():</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$floatval = floatval(\"3.14\");</code>";
echo "</div>";
$floatval = floatval("3.14");
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $floatval . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($floatval) . ")</span>";
echo "</div>";

// strval
echo "<p><strong>strval():</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$strval = strval(99.9);</code>";
echo "</div>";
$strval = strval(99.9);
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $strval . " <span style='color: #7f8c8d;'>(Tipo: " . gettype($strval) . ")</span>";
echo "</div>";
echo "</div>";

echo "</div>";

// Tabla de conversiones comunes
echo "<div style='background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin: 15px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #ccc; padding-bottom: 8px;'>Tabla de Conversiones Comunes</h3>";
echo "<div style='overflow-x: auto;'>";
echo "<table style='width: 100%; border-collapse: collapse; margin-top: 15px;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Desde</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>A Integer</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>A Float</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>A String</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>A Boolean</th>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #f2f2f2;'><strong>TRUE</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>1</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>1.0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>\"1\"</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>TRUE</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #f2f2f2;'><strong>FALSE</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>0.0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>\"\"</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>FALSE</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #f2f2f2;'><strong>\"123\"</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>123</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>123.0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>\"123\"</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>TRUE</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #f2f2f2;'><strong>\"123abc\"</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>123</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>123.0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>\"123abc\"</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>TRUE</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #f2f2f2;'><strong>NULL</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>0.0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>\"\"</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>FALSE</td>";
echo "</tr>";

echo "</table>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo para Conversiones:</h4>";
echo "<p>Cuando se convierte un valor a booleano, recuerde que cualquier valor distinto de los considerados 'falsy' (0, \"\", NULL, etc.) se convertirá a <code>true</code>.</p>";
echo "</div>";
echo "</div>";

// ======================= 6. CONSTANTES =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>6. CONSTANTES</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Una constante es un identificador (nombre) para un valor simple. Como su nombre indica, su valor no puede cambiar durante la ejecución del script.</p>";
echo "<p><strong>Características:</strong> A diferencia de las variables, las constantes no llevan el símbolo $ delante y se definen usando la función <code>define()</code> o la palabra clave <code>const</code>.</p>";
echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Definir constantes con define()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Definición con define()</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>define(\"PI\", 3.14159);</code>";
echo "</div>";
define("PI", 3.14159);
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "PI = " . PI . "<br>";
echo "<span style='color: #7f8c8d;'>Define una constante en tiempo de ejecución</span>";
echo "</div>";
echo "</div>";

// Definir constantes con const
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Definición con const</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>const VELOCIDAD_LUZ = 299792458;</code>";
echo "</div>";
const VELOCIDAD_LUZ = 299792458;
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "VELOCIDAD_LUZ = " . VELOCIDAD_LUZ . "<br>";
echo "<span style='color: #7f8c8d;'>Define una constante en tiempo de compilación (PHP 5.3+)</span>";
echo "</div>";
echo "</div>";

echo "</div>";

// Constantes predefinidas y mágicas
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Constantes predefinidas
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Constantes Predefinidas</h3>";
echo "<p>PHP proporciona numerosas constantes predefinidas:</p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo PHP_VERSION;<br>echo PHP_OS;</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "PHP_VERSION = " . PHP_VERSION . "<br>";
echo "PHP_OS = " . PHP_OS . "<br>";
echo "</div>";
echo "</div>";

// Constantes mágicas
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Constantes Mágicas</h3>";
echo "<p>Las constantes mágicas cambian según donde se usen:</p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo __LINE__;<br>echo __FILE__;</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "__LINE__ = " . __LINE__ . " (Número de línea actual)<br>";
echo "__FILE__ = " . __FILE__ . " (Ruta completa del archivo)<br>";
echo "</div>";
echo "</div>";

echo "</div>";

// Otras constantes mágicas
echo "<div style='background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin: 15px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #ccc; padding-bottom: 8px;'>Otras Constantes Mágicas</h3>";
echo "<ul style='margin-top: 10px;'>";
echo "<li><strong>__DIR__</strong> - Directorio del archivo</li>";
echo "<li><strong>__FUNCTION__</strong> - Nombre de la función</li>";
echo "<li><strong>__CLASS__</strong> - Nombre de la clase</li>";
echo "<li><strong>__METHOD__</strong> - Nombre del método</li>";
echo "<li><strong>__NAMESPACE__</strong> - Nombre del namespace actual</li>";
echo "</ul>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Diferencias entre define() y const:</h4>";
echo "<ul>";
echo "<li><strong>define():</strong> Se puede usar en cualquier parte del código, incluso dentro de estructuras condicionales</li>";
echo "<li><strong>const:</strong> Solo puede utilizarse en el ámbito global o dentro de clases</li>";
echo "<li><strong>define():</strong> Se evalúa en tiempo de ejecución</li>";
echo "<li><strong>const:</strong> Se evalúa en tiempo de compilación (más eficiente)</li>";
echo "</ul>";
echo "</div>";
echo "</div>";

// ======================= RESUMEN COMPARATIVO =======================
echo "<div style='background-color: #f2f8ff; padding: 15px; border-radius: 5px; border: 1px solid #3498db; margin-top: 30px;'>";
echo "<h2 style='color: #3498db; text-align: center; margin-bottom: 20px;'>RESUMEN COMPARATIVO DE TIPOS DE DATOS ESCALARES</h2>";

echo "<table style='width: 100%; border-collapse: collapse;'>";
echo "<thead style='background-color: #3498db; color: white;'>";
echo "<tr>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Tipo</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Ejemplos</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Características</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Uso Común</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Integer</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>42, -15, 0</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Números enteros sin decimales</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Contadores, índices, IDs</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Float</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>3.14, -2.5, 1.2e3</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Números con decimales o notación científica</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Valores precisos, cálculos científicos</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>String</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>'texto', \"hola\", <<<EOD</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Secuencia de caracteres</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Texto, nombres, HTML, salida</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Boolean</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>true, false</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Valores de verdad</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Condiciones, flags de estado</td>";
echo "</tr>";

echo "</tbody>";
echo "</table>";
echo "</div>";

// ======================= CONSEJOS PRÁCTICOS =======================
echo "<div style='background-color: #fffaeb; padding: 15px; border-radius: 5px; border-left: 5px solid #f1c40f; margin-top: 30px;'>";
echo "<h3 style='color: #f39c12; text-align: center;'>CONSEJOS PRÁCTICOS PARA TRABAJAR CON TIPOS DE DATOS EN PHP</h3>";

echo "<ul style='padding-left: 20px;'>";
echo "<li><strong>Usa comparaciones estrictas (===)</strong> - Compara tanto el valor como el tipo para evitar conversiones inesperadas</li>";
echo "<li><strong>Verifica los tipos</strong> - Usa funciones como <code>is_int()</code>, <code>is_float()</code>, <code>is_string()</code>, <code>is_bool()</code> para comprobar los tipos</li>";
echo "<li><strong>Sé explícito en las conversiones</strong> - Usa los operadores de casteo para dejar claro cuándo estás cambiando el tipo de un valor</li>";
echo "<li><strong>Cuidado con la conversión implícita</strong> - PHP convierte automáticamente entre tipos en muchas situaciones, lo que puede llevar a resultados inesperados</li>";
echo "<li><strong>Usa type hinting en funciones (PHP 7+)</strong> - Especifica los tipos esperados en los parámetros y valores de retorno para código más robusto</li>";
echo "<li><strong>Considera usar declare(strict_types=1)</strong> - Para forzar tipos estrictos en llamadas a funciones (PHP 7+)</li>";
echo "</ul>";
echo "</div>";

// ======================= EJEMPLO PRÁCTICO FINAL =======================
echo "<div style='background-color: #e8f4fb; padding: 20px; border-radius: 8px; margin-top: 30px;'>";
echo "<h3 style='color: #2980b9; text-align: center; margin-bottom: 20px;'>EJEMPLO PRÁCTICO: CALCULADORA SIMPLE</h3>";

echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; margin-bottom: 20px;'>";
echo "<code>function calculadora(\$num1, \$num2, \$operacion) {<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;// Asegurar que los valores son numéricos<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;\$num1 = (float)\$num1;<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;\$num2 = (float)\$num2;<br><br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;// Realizar la operación solicitada<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;switch (\$operacion) {<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'suma':<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$num1 + \$num2;<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'resta':<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$num1 - \$num2;<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'multiplicacion':<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$num1 * \$num2;<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'division':<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Comprobar división por cero<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (\$num2 == 0) {<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 'Error: División por cero';<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$num1 / \$num2;<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 'Operación no válida';<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;}<br>";
echo "}</code>";
echo "</div>";

// Demostración de la función calculadora
function calculadora($num1, $num2, $operacion) {
   // Asegurar que los valores son numéricos
   $num1 = (float)$num1;
   $num2 = (float)$num2;

   // Realizar la operación solicitada
   switch ($operacion) {
       case 'suma':
           return $num1 + $num2;
       case 'resta':
           return $num1 - $num2;
       case 'multiplicacion':
           return $num1 * $num2;
       case 'division':
           // Comprobar división por cero
           if ($num2 == 0) {
               return 'Error: División por cero';
           }
           return $num1 / $num2;
       default:
           return 'Operación no válida';
   }
}

echo "<div style='display: flex; flex-wrap: wrap; gap: 15px; margin-top: 20px;'>";

$ejemplos = [
   ['10', '5', 'suma'], 
   ['-3.5', '2', 'resta'], 
   ['4', '0', 'division'],
   ['2.5', '3', 'multiplicacion']
];

foreach ($ejemplos as $ejemplo) {
   echo "<div style='flex: 1; min-width: 200px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 12px;'>";
   echo "<strong>Operación:</strong> " . ucfirst($ejemplo[2]) . "<br>";
   echo "<strong>Números:</strong> " . $ejemplo[0] . " y " . $ejemplo[1] . "<br>";
   echo "<strong>Resultado:</strong> " . calculadora($ejemplo[0], $ejemplo[1], $ejemplo[2]) . "<br>";
   echo "</div>";
}

echo "</div>";

echo "<div style='margin-top: 20px;'>";
echo "<p><strong>Observaciones:</strong></p>";
echo "<ul>";
echo "<li>Convertimos explícitamente los valores a <code>float</code> para asegurarnos de que funcionan correctamente las operaciones matemáticas</li>";
echo "<li>Manejamos el caso especial de división por cero, devolviendo un mensaje de error (string)</li>";
echo "<li>La función trabaja con diferentes tipos de entrada (strings numéricos o números)</li>";
echo "</ul>";
echo "</div>";

echo "</div>";

echo "</div>";
?>
