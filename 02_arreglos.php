<?php
/**
 * Ejemplos de Arreglos en PHP
 * 
 * Los arreglos en PHP son estructuras que pueden almacenar múltiples valores.
 * Este ejemplo muestra la sintaxis de PHP para crear y manipular diferentes tipos de arreglos.
 */

// Configuración para mostrar el resultado
echo "<div style='background-color: #f9f9f9; padding: 25px; border-radius: 8px; font-family: Arial, sans-serif; max-width: 1200px; margin: 0 auto;'>";
echo "<h1 style='color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 15px; margin-bottom: 25px;'>ARREGLOS EN PHP</h1>";

// INTRODUCCIÓN
echo "<div style='background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 30px;'>";
echo "<p style='font-size: 16px;'><strong>Los Arreglos</strong> son una de las estructuras de datos más versátiles en PHP. Permiten almacenar múltiples valores en una sola variable y acceder a ellos mediante un índice. PHP ofrece tres tipos principales de arreglos: <span style='color: #e74c3c;'>indexados, asociativos y multidimensionales</span>.</p>";
echo "</div>";

// ======================= 1. ARREGLOS INDEXADOS =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>1. ARREGLOS INDEXADOS</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Los arreglos indexados utilizan índices numéricos para acceder a los valores. Por defecto, el índice del primer elemento es 0.</p>";
echo "<p><strong>Características:</strong> Cada valor tiene un índice numérico que se incrementa automáticamente cuando se agregan nuevos elementos, a menos que se especifique otro índice.</p>";
echo "</div>";

// Diferentes formas de declaración
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Sintaxis moderna con corchetes
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Sintaxis Moderna con Corchetes []</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$frutas = [\"Manzana\", \"Banana\", \"Naranja\", \"Fresa\"];</code>";
echo "</div>";
$frutas = ["Manzana", "Banana", "Naranja", "Fresa"];
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($frutas, true) . "</pre>";
echo "<span style='color: #7f8c8d;'>(Introducida en PHP 5.4+)</span>";
echo "</div>";
echo "</div>";

// Sintaxis antigua con función array()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Sintaxis con Función array()</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$colores = array(\"Rojo\", \"Azul\", \"Verde\", \"Amarillo\");</code>";
echo "</div>";
$colores = array("Rojo", "Azul", "Verde", "Amarillo");
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($colores, true) . "</pre>";
echo "<span style='color: #7f8c8d;'>(Compatible con todas las versiones de PHP)</span>";
echo "</div>";
echo "</div>";

echo "</div>";

// Acceso y manipulación
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Acceso a elementos
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Acceso a Elementos</h3>";
echo "<p><strong>Primer elemento (índice 0):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$frutas[0];</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $frutas[0];
echo "</div>";

echo "<p><strong>Tercer elemento (índice 2):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$colores[2];</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $colores[2];
echo "</div>";
echo "</div>";

// Añadir elementos
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Añadir Elementos</h3>";
echo "<p><strong>Método 1: Usando corchetes vacíos (añade al final):</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$frutas[] = \"Uva\";</code>";
echo "</div>";
$frutas_copia = $frutas;
$frutas_copia[] = "Uva";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($frutas_copia, true) . "</pre>";
echo "</div>";

echo "<p><strong>Método 2: Especificando un índice:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$colores[4] = \"Morado\";</code>";
echo "</div>";
$colores_copia = $colores;
$colores_copia[4] = "Morado";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($colores_copia, true) . "</pre>";
echo "</div>";
echo "</div>";

echo "</div>";

// Representación visual de un arreglo indexado
echo "<div style='background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; text-align: center;'>Representación Visual de un Arreglo Indexado</h3>";
echo "<div style='overflow-x: auto;'>";
echo "<table style='width: 100%; max-width: 600px; margin: 0 auto; border-collapse: collapse;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 8px; text-align: center; border: 1px solid #ddd;'>Índice</th>";
foreach (array_keys($frutas) as $key) {
    echo "<th style='padding: 8px; text-align: center; border: 1px solid #ddd;'>$key</th>";
}
echo "</tr>";
echo "<tr>";
echo "<th style='padding: 8px; text-align: center; border: 1px solid #ddd; background-color: #3498db; color: white;'>Valor</th>";
foreach ($frutas as $value) {
    echo "<td style='padding: 8px; text-align: center; border: 1px solid #ddd;'>$value</td>";
}
echo "</tr>";
echo "</table>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo:</h4>";
echo "<p>Los índices en PHP comienzan en 0, no en 1. Esto significa que el primer elemento tiene el índice 0, el segundo tiene el índice 1, y así sucesivamente.</p>";
echo "</div>";
echo "</div>";

// ======================= 2. ARREGLOS ASOCIATIVOS =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>2. ARREGLOS ASOCIATIVOS</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Los arreglos asociativos utilizan claves personalizadas en lugar de índices numéricos. Cada elemento tiene una clave y un valor asociado.</p>";
echo "<p><strong>Ventajas:</strong> Permiten acceder a los datos de forma más descriptiva y semántica, utilizando nombres significativos en lugar de índices numéricos.</p>";
echo "</div>";

// Diferentes formas de declaración
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Sintaxis moderna con corchetes
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Sintaxis Moderna con Corchetes []</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$persona = [<br>
    \"nombre\" => \"Juan\",<br>
    \"edad\" => 30,<br>
    \"profesion\" => \"Desarrollador\",<br>
    \"ciudad\" => \"Ciudad Victoria\"<br>
];</code>";
echo "</div>";
$persona = [
    "nombre" => "Juan",
    "edad" => 30,
    "profesion" => "Desarrollador",
    "ciudad" => "Ciudad Victoria"
];
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($persona, true) . "</pre>";
echo "<span style='color: #7f8c8d;'>(Introducida en PHP 5.4+)</span>";
echo "</div>";
echo "</div>";

// Sintaxis antigua con función array()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Sintaxis con Función array()</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$coche = array(<br>
    \"marca\" => \"Toyota\",<br>
    \"modelo\" => \"Corolla\",<br>
    \"año\" => 2022,<br>
    \"color\" => \"Plata\"<br>
);</code>";
echo "</div>";
$coche = array(
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2022,
    "color" => "Plata"
);
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($coche, true) . "</pre>";
echo "<span style='color: #7f8c8d;'>(Compatible con todas las versiones de PHP)</span>";
echo "</div>";
echo "</div>";

echo "</div>";

// Acceso y Modificación
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// Acceso a elementos
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Acceso a Elementos</h3>";
echo "<p><strong>Acceder mediante clave:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$persona[\"nombre\"];</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 15px;'>";
echo "<strong>Resultado:</strong> " . $persona["nombre"];
echo "</div>";

echo "<p><strong>Otro ejemplo:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$coche[\"modelo\"];</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $coche["modelo"];
echo "</div>";
echo "</div>";

// Modificar valores
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Modificar Valores</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$persona[\"edad\"] = 31;<br>\$coche[\"color\"] = \"Negro\";</code>";
echo "</div>";
$persona_mod = $persona;
$persona_mod["edad"] = 31;
$coche_mod = $coche;
$coche_mod["color"] = "Negro";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Persona modificada:<br>";
echo "<pre style='margin: 5px 0;'>" . print_r($persona_mod, true) . "</pre>";
echo "Coche modificado:<br>";
echo "<pre style='margin: 5px 0;'>" . print_r($coche_mod, true) . "</pre>";
echo "</div>";
echo "</div>";

echo "</div>";

// Representación visual de un arreglo asociativo
echo "<div style='background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; text-align: center;'>Representación Visual de un Arreglo Asociativo</h3>";
echo "<div style='overflow-x: auto;'>";
echo "<table style='width: 100%; max-width: 600px; margin: 0 auto; border-collapse: collapse;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 8px; text-align: center; border: 1px solid #ddd;'>Clave</th>";
foreach (array_keys($persona) as $key) {
    echo "<th style='padding: 8px; text-align: center; border: 1px solid #ddd;'>\"$key\"</th>";
}
echo "</tr>";
echo "<tr>";
echo "<th style='padding: 8px; text-align: center; border: 1px solid #ddd; background-color: #3498db; color: white;'>Valor</th>";
foreach ($persona as $value) {
    echo "<td style='padding: 8px; text-align: center; border: 1px solid #ddd;'>" . $value . "</td>";
}
echo "</tr>";
echo "</table>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo:</h4>";
echo "<p>Los arreglos asociativos son ideales para almacenar datos que tienen una estructura de pares clave-valor, como información de usuarios, configuraciones, o cualquier conjunto de datos con propiedades específicas.</p>";
echo "</div>";
echo "</div>";

// ======================= 3. ARREGLOS MULTIDIMENSIONALES =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>3. ARREGLOS MULTIDIMENSIONALES</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Definición:</strong> Los arreglos multidimensionales son arreglos que contienen otros arreglos como elementos. Pueden tener múltiples niveles de profundidad.</p>";
echo "<p><strong>Usos:</strong> Son útiles para representar datos con estructura jerárquica o tabular, como matrices, datos tabulares, o estructuras anidadas como menús o categorías con subcategorías.</p>";
echo "</div>";

// Tipos de arreglos multidimensionales
echo "<div style='margin: 20px 0;'>";

// Arreglo indexado de arreglos indexados (matriz)
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 20px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Matriz (Arreglo Indexado de Arreglos Indexados)</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$matriz = [<br>
    [1, 2, 3],<br>
    [4, 5, 6],<br>
    [7, 8, 9]<br>
];</code>";
echo "</div>";
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($matriz, true) . "</pre>";
echo "</div>";

echo "<p><strong>Acceso a elementos:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$matriz[1][2]; // Fila 2, Columna 3</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $matriz[1][2] . " <span style='color: #7f8c8d;'>(Elemento en la fila 1, columna 2)</span>";
echo "</div>";

// Representación visual de matriz
echo "<div style='margin-top: 15px;'>";
echo "<h4 style='color: #2c3e50;'>Representación Visual:</h4>";
echo "<table style='margin: 0 auto; border-collapse: collapse;'>";
for ($i = 0; $i < count($matriz); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo "<td style='padding: 10px; text-align: center; border: 1px solid #ddd; background-color: " . ($i == 1 && $j == 2 ? "#ffeb3b" : "#f9f9f9") . ";'>" . $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<p style='text-align: center; color: #7f8c8d; margin-top: 5px;'><em>El elemento resaltado es el que se accede con \$matriz[1][2]</em></p>";
echo "</div>";
echo "</div>";

// Arreglo indexado de arreglos asociativos
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 20px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Arreglo Indexado de Arreglos Asociativos</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$estudiantes = [<br>
    [<br>
        \"nombre\" => \"María\",<br>
        \"edad\" => 20,<br>
        \"calificaciones\" => [90, 85, 95]<br>
    ],<br>
    [<br>
        \"nombre\" => \"Pedro\",<br>
        \"edad\" => 22,<br>
        \"calificaciones\" => [80, 88, 82]<br>
    ]<br>
];</code>";
echo "</div>";
$estudiantes = [
    [
        "nombre" => "María",
        "edad" => 20,
        "calificaciones" => [90, 85, 95]
    ],
    [
        "nombre" => "Pedro",
        "edad" => 22,
        "calificaciones" => [80, 88, 82]
    ]
];
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($estudiantes, true) . "</pre>";
echo "</div>";

echo "<p><strong>Acceso a elementos:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$estudiantes[0][\"nombre\"]; // Nombre del primer estudiante</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong> " . $estudiantes[0]["nombre"];
echo "</div>";

echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$estudiantes[1][\"calificaciones\"][1]; // Segunda calificación del segundo estudiante</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $estudiantes[1]["calificaciones"][1];
echo "</div>";
echo "</div>";

// Arreglo asociativo de arreglos asociativos
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 20px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Arreglo Asociativo de Arreglos Asociativos</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>\$inventario = [<br>
    \"electronica\" => [<br>
        \"nombre\" => \"Departamento de Electrónica\",<br>
        \"productos\" => [\"TV\", \"Radio\", \"Teléfono\"]<br>
    ],<br>
    \"ropa\" => [<br>
        \"nombre\" => \"Departamento de Ropa\",<br>
        \"productos\" => [\"Camisas\", \"Pantalones\", \"Calcetines\"]<br>
    ]<br>
];</code>";
echo "</div>";
$inventario = [
    "electronica" => [
        "nombre" => "Departamento de Electrónica",
        "productos" => ["TV", "Radio", "Teléfono"]
    ],
    "ropa" => [
        "nombre" => "Departamento de Ropa",
        "productos" => ["Camisas", "Pantalones", "Calcetines"]
    ]
];
echo "<div style='background-color: #f7f9fa; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong><br>";
echo "<pre style='margin: 5px 0;'>" . print_r($inventario, true) . "</pre>";
echo "</div>";

echo "<p><strong>Acceso a elementos:</strong></p>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$inventario[\"electronica\"][\"nombre\"]; // Nombre del departamento de electrónica</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<strong>Resultado:</strong> " . $inventario["electronica"]["nombre"];
echo "</div>";

echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>echo \$inventario[\"ropa\"][\"productos\"][1]; // Segundo producto del departamento de ropa</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . $inventario["ropa"]["productos"][1];
echo "</div>";
echo "</div>";

echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo para Arreglos Multidimensionales:</h4>";
echo "<p>Puede ser útil visualizar los arreglos multidimensionales como 'arreglos de arreglos'. Para acceder a un elemento específico, se necesita navegar a través de cada nivel de anidación, especificando el índice o clave en cada nivel.</p>";
echo "</div>";
echo "</div>";

// ======================= 4. FUNCIONES ÚTILES PARA ARREGLOS =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>4. FUNCIONES ÚTILES PARA ARREGLOS</h2>";

// Definición
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin: 15px 0;'>";
echo "<p><strong>Información:</strong> PHP proporciona más de 80 funciones integradas para trabajar con arreglos, lo que facilita la manipulación, transformación y análisis de datos.</p>";
echo "</div>";

// Funciones principales
echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// count()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>count() - Contar Elementos</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$total = count(\$frutas);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . count($frutas) . " elementos";
echo "</div>";
echo "<p style='margin-top: 10px;'><em>Cuenta el número de elementos en un arreglo. Para arreglos multidimensionales, usa el segundo parámetro COUNT_RECURSIVE.</em></p>";
echo "</div>";

// sort()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>sort() - Ordenar Arreglo</h3>";
$numeros = [5, 2, 8, 1, 9];
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$numeros = [5, 2, 8, 1, 9];<br>sort(\$numeros);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Arreglo original:</strong> " . implode(", ", $numeros) . "<br>";
sort($numeros);
echo "<strong>Después de sort():</strong> " . implode(", ", $numeros);
echo "</div>";
echo "<p style='margin-top: 10px;'><em>Ordena un arreglo en orden ascendente. Para orden descendente, usa rsort().</em></p>";
echo "</div>";

echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// in_array()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>in_array() - Buscar Valor</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>if (in_array(8, \$numeros)) {<br>    echo \"El número 8 está en el arreglo\";<br>}</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong> " . (in_array(1, $numeros) ? "El número 1 está en el arreglo" : "El número 1 no está en el arreglo");
echo "</div>";
echo "<p style='margin-top: 10px;'><em>Comprueba si un valor existe en un arreglo. Devuelve true si se encuentra, false en caso contrario.</em></p>";
echo "</div>";

// array_keys()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>array_keys() - Obtener Claves</h3>";
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$claves = array_keys(\$persona);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$claves = array_keys($persona);
echo "<pre style='margin: 5px 0;'>" . print_r($claves, true) . "</pre>";
echo "</div>";
echo "<p style='margin-top: 10px;'><em>Devuelve todas las claves de un arreglo o las claves de un valor específico si se proporciona un segundo parámetro.</em></p>";
echo "</div>";

echo "</div>";

echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; margin: 20px 0;'>";

// array_merge()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>array_merge() - Fusionar Arreglos</h3>";
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$array1 = [1, 2, 3];<br>\$array2 = [4, 5, 6];<br>\$fusionado = array_merge(\$array1, \$array2);</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado:</strong><br>";
$fusionado = array_merge($array1, $array2);
echo "<pre style='margin: 5px 0;'>" . print_r($fusionado, true) . "</pre>";
echo "</div>";
echo "<p style='margin-top: 10px;'><em>Fusiona uno o más arreglos en un solo arreglo. En arreglos asociativos, las claves duplicadas son sobrescritas por las últimas.</em></p>";
echo "</div>";

// array_filter()
echo "<div style='flex: 1; min-width: 300px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin-bottom: 10px;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>array_filter() - Filtrar Elementos</h3>";
$numeros_mezcla = [1, 5, 8, 12, 3, 10];
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 5px;'>";
echo "<code>\$numeros_mezcla = [1, 5, 8, 12, 3, 10];<br>\$pares = array_filter(\$numeros_mezcla, function(\$n) {<br>    return \$n % 2 === 0;<br>});</code>";
echo "</div>";
echo "<div style='background-color: #f7f9fa; padding: 5px; border-radius: 5px;'>";
echo "<strong>Resultado (números pares):</strong><br>";
$pares = array_filter($numeros_mezcla, function($n) {
   return $n % 2 === 0;
});
echo "<pre style='margin: 5px 0;'>" . print_r($pares, true) . "</pre>";
echo "</div>";
echo "<p style='margin-top: 10px;'><em>Filtra elementos de un arreglo usando una función de callback. Solo mantiene los elementos para los que la función devuelve true.</em></p>";
echo "</div>";

echo "</div>";

// Tabla de funciones para arreglos
echo "<div style='background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; text-align: center;'>Otras Funciones Útiles para Arreglos</h3>";
echo "<div style='overflow-x: auto;'>";
echo "<table style='width: 100%; border-collapse: collapse;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Función</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Descripción</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Ejemplo</th>";
echo "</tr>";

$funciones = [
   ["array_push()", "Añade uno o más elementos al final de un arreglo", "\$arr = [1, 2]; array_push(\$arr, 3, 4); // \$arr es [1, 2, 3, 4]"],
   ["array_pop()", "Extrae y devuelve el último elemento de un arreglo", "\$arr = [1, 2, 3]; \$ultimo = array_pop(\$arr); // \$ultimo es 3, \$arr es [1, 2]"],
   ["array_shift()", "Extrae y devuelve el primer elemento de un arreglo", "\$arr = [1, 2, 3]; \$primero = array_shift(\$arr); // \$primero es 1, \$arr es [2, 3]"],
   ["array_unshift()", "Añade uno o más elementos al inicio de un arreglo", "\$arr = [3, 4]; array_unshift(\$arr, 1, 2); // \$arr es [1, 2, 3, 4]"],
   ["array_slice()", "Extrae una porción de un arreglo", "\$arr = [1, 2, 3, 4, 5]; \$porcion = array_slice(\$arr, 1, 3); // \$porcion es [2, 3, 4]"],
   ["array_reverse()", "Devuelve un arreglo con los elementos en orden inverso", "\$arr = [1, 2, 3]; \$invertido = array_reverse(\$arr); // \$invertido es [3, 2, 1]"],
   ["array_sum()", "Calcula la suma de los valores en un arreglo", "\$arr = [1, 2, 3, 4]; \$suma = array_sum(\$arr); // \$suma es 10"],
   ["array_map()", "Aplica una función a cada elemento de un arreglo", "\$arr = [1, 2, 3]; \$doble = array_map(function(\$n) { return \$n * 2; }, \$arr); // \$doble es [2, 4, 6]"]
];

foreach ($funciones as $funcion) {
   echo "<tr>";
   echo "<td style='padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;'><code>" . $funcion[0] . "</code></td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $funcion[1] . "</td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'><code>" . $funcion[2] . "</code></td>";
   echo "</tr>";
}

echo "</table>";
echo "</div>";
echo "</div>";

echo "<div style='background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; margin: 15px 0;'>";
echo "<h4 style='color: #e67e22; margin-top: 0;'>Consejo para Funciones de Arreglos:</h4>";
echo "<p>Familiarizarse con las funciones de arreglos de PHP puede ahorrar mucho tiempo y hacer que el código sea más eficiente. Intenta usar estas funciones integradas en lugar de escribir tu propia lógica para manipular arreglos.</p>";
echo "</div>";
echo "</div>";

// ======================= EJEMPLOS PRÁCTICOS =======================
echo "<div style='margin-bottom: 40px;'>";
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px; display: inline-block;'>5. EJEMPLOS PRÁCTICOS</h2>";

// Ejemplo 1: Lista de Productos
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Ejemplo 1: Lista de Productos con Precios</h3>";

echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>// Definir un arreglo de productos con sus precios<br>";
echo "\$productos = [<br>";
echo "    [\"nombre\" => \"Laptop\", \"precio\" => 12000, \"stock\" => 10],<br>";
echo "    [\"nombre\" => \"Smartphone\", \"precio\" => 8000, \"stock\" => 15],<br>";
echo "    [\"nombre\" => \"Tablet\", \"precio\" => 5000, \"stock\" => 8],<br>";
echo "    [\"nombre\" => \"Auriculares\", \"precio\" => 1500, \"stock\" => 20]<br>";
echo "];<br><br>";
echo "// Calcular el valor total del inventario<br>";
echo "\$total_inventario = 0;<br>";
echo "foreach (\$productos as \$producto) {<br>";
echo "    \$total_inventario += \$producto[\"precio\"] * \$producto[\"stock\"];<br>";
echo "}<br><br>";
echo "// Encontrar el producto más caro<br>";
echo "\$producto_mas_caro = null;<br>";
echo "\$precio_max = 0;<br>";
echo "foreach (\$productos as \$producto) {<br>";
echo "    if (\$producto[\"precio\"] > \$precio_max) {<br>";
echo "        \$precio_max = \$producto[\"precio\"];<br>";
echo "        \$producto_mas_caro = \$producto[\"nombre\"];<br>";
echo "    }<br>";
echo "}</code>";
echo "</div>";

// Ejecutar el código del ejemplo
$productos = [
   ["nombre" => "Laptop", "precio" => 12000, "stock" => 10],
   ["nombre" => "Smartphone", "precio" => 8000, "stock" => 15],
   ["nombre" => "Tablet", "precio" => 5000, "stock" => 8],
   ["nombre" => "Auriculares", "precio" => 1500, "stock" => 20]
];

$total_inventario = 0;
foreach ($productos as $producto) {
   $total_inventario += $producto["precio"] * $producto["stock"];
}

$producto_mas_caro = null;
$precio_max = 0;
foreach ($productos as $producto) {
   if ($producto["precio"] > $precio_max) {
       $precio_max = $producto["precio"];
       $producto_mas_caro = $producto["nombre"];
   }
}

echo "<div style='background-color: #f7f9fa; padding: 15px; border-radius: 5px;'>";
echo "<strong>Lista de Productos:</strong><br>";
echo "<table style='width: 100%; border-collapse: collapse; margin: 10px 0;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Producto</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Precio</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Stock</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Valor Total</th>";
echo "</tr>";

foreach ($productos as $producto) {
   echo "<tr>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $producto["nombre"] . "</td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>$" . number_format($producto["precio"], 2) . "</td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $producto["stock"] . "</td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>$" . number_format($producto["precio"] * $producto["stock"], 2) . "</td>";
   echo "</tr>";
}

echo "</table>";
echo "<br><strong>Valor total del inventario:</strong> $" . number_format($total_inventario, 2);
echo "<br><strong>Producto más caro:</strong> " . $producto_mas_caro . " ($" . number_format($precio_max, 2) . ")";
echo "</div>";
echo "</div>";

// Ejemplo 2: Análisis de Datos
echo "<div style='background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 15px; margin: 20px 0;'>";
echo "<h3 style='color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 8px;'>Ejemplo 2: Análisis de Calificaciones</h3>";

echo "<div style='background-color: #272822; color: #f8f8f2; padding: 10px; border-radius: 5px; margin-bottom: 10px;'>";
echo "<code>// Datos de calificaciones de estudiantes<br>";
echo "\$calificaciones = [<br>";
echo "    \"Ana\" => [85, 90, 78, 92, 88],<br>";
echo "    \"Luis\" => [70, 65, 68, 72, 74],<br>";
echo "    \"Carla\" => [95, 92, 98, 97, 96],<br>";
echo "    \"Miguel\" => [80, 82, 85, 75, 78]<br>";
echo "];<br><br>";
echo "// Calcular promedios<br>";
echo "\$promedios = [];<br>";
echo "foreach (\$calificaciones as \$estudiante => \$notas) {<br>";
echo "    \$promedios[\$estudiante] = array_sum(\$notas) / count(\$notas);<br>";
echo "}<br><br>";
echo "// Encontrar la mejor calificación<br>";
echo "\$mejor_estudiante = \"\";<br>";
echo "\$maximo_promedio = 0;<br>";
echo "foreach (\$promedios as \$estudiante => \$promedio) {<br>";
echo "    if (\$promedio > \$maximo_promedio) {<br>";
echo "        \$maximo_promedio = \$promedio;<br>";
echo "        \$mejor_estudiante = \$estudiante;<br>";
echo "    }<br>";
echo "}</code>";
echo "</div>";

// Ejecutar el código del ejemplo
$calificaciones = [
   "Ana" => [85, 90, 78, 92, 88],
   "Luis" => [70, 65, 68, 72, 74],
   "Carla" => [95, 92, 98, 97, 96],
   "Miguel" => [80, 82, 85, 75, 78]
];

$promedios = [];
foreach ($calificaciones as $estudiante => $notas) {
   $promedios[$estudiante] = array_sum($notas) / count($notas);
}

$mejor_estudiante = "";
$maximo_promedio = 0;
foreach ($promedios as $estudiante => $promedio) {
   if ($promedio > $maximo_promedio) {
       $maximo_promedio = $promedio;
       $mejor_estudiante = $estudiante;
   }
}

echo "<div style='background-color: #f7f9fa; padding: 15px; border-radius: 5px;'>";
echo "<strong>Calificaciones de los Estudiantes:</strong><br>";
echo "<table style='width: 100%; border-collapse: collapse; margin: 10px 0;'>";
echo "<tr style='background-color: #3498db; color: white;'>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Estudiante</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Calificaciones</th>";
echo "<th style='padding: 8px; text-align: left; border: 1px solid #ddd;'>Promedio</th>";
echo "</tr>";

foreach ($calificaciones as $estudiante => $notas) {
   echo "<tr>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $estudiante . "</td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . implode(", ", $notas) . "</td>";
   echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . number_format($promedios[$estudiante], 2) . "</td>";
   echo "</tr>";
}

echo "</table>";
echo "<br><strong>Estudiante con mejor promedio:</strong> " . $mejor_estudiante . " (" . number_format($maximo_promedio, 2) . ")";
echo "</div>";
echo "</div>";

echo "</div>";

// ======================= RESUMEN COMPARATIVO =======================
echo "<div style='background-color: #f2f8ff; padding: 15px; border-radius: 5px; border: 1px solid #3498db; margin-top: 30px;'>";
echo "<h2 style='color: #3498db; text-align: center; margin-bottom: 20px;'>RESUMEN COMPARATIVO DE TIPOS DE ARREGLOS EN PHP</h2>";

echo "<table style='width: 100%; border-collapse: collapse;'>";
echo "<thead style='background-color: #3498db; color: white;'>";
echo "<tr>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Tipo de Arreglo</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Descripción</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Acceso a Elementos</th>";
echo "<th style='padding: 10px; text-align: left; border: 1px solid #ccc;'>Uso Ideal</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Indexado</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Elementos accesibles por índices numéricos</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'><code>\$arr[0], \$arr[1]</code></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Listas, colecciones ordenadas</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Asociativo</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Elementos accesibles por claves personalizadas</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'><code>\$arr[\"clave\"]</code></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Datos estructurados, pares clave-valor</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='padding: 10px; border: 1px solid #ccc; background-color: #ecf0f1;'><strong>Multidimensional</strong></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Arreglos dentro de arreglos (anidados)</td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'><code>\$arr[0][1], \$arr[\"clave\"][\"subclave\"]</code></td>";
echo "<td style='padding: 10px; border: 1px solid #ccc;'>Datos jerárquicos, matrices, tablas</td>";
echo "</tr>";

echo "</tbody>";
echo "</table>";
echo "</div>";

// ======================= CONSEJOS PRÁCTICOS =======================
echo "<div style='background-color: #fffaeb; padding: 15px; border-radius: 5px; border-left: 5px solid #f1c40f; margin-top: 30px;'>";
echo "<h3 style='color: #f39c12; text-align: center;'>CONSEJOS PRÁCTICOS PARA TRABAJAR CON ARREGLOS EN PHP</h3>";

echo "<ul style='padding-left: 20px;'>";
echo "<li><strong>Usa la sintaxis de corchetes []</strong> - Es más concisa y legible que la función array()</li>";
echo "<li><strong>Aprovecha las funciones integradas</strong> - PHP ofrece numerosas funciones para manipular arreglos</li>";
echo "<li><strong>Utiliza foreach para iterar</strong> - Es la forma más legible y eficiente de recorrer arreglos, especialmente los asociativos</li>";
echo "<li><strong>Recuerda que los índices empiezan en 0</strong> - El primer elemento tiene el índice 0, no 1</li>";
echo "<li><strong>Organiza datos complejos en arreglos multidimensionales</strong> - Facilita la gestión y el acceso a información estructurada</li>";
echo "<li><strong>Usa arreglos asociativos para datos con propiedades</strong> - Mejora la legibilidad y mantenibilidad del código</li>";
echo "<li><strong>Documenta la estructura de arreglos complejos</strong> - Especialmente útil para arreglos multidimensionales</li>";
echo "</ul>";
echo "</div>";

echo "</div>";
?>
