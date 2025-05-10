<?php
// Lista de archivos PHP a procesar
$files = [
    '01_escalares',
    '02_arreglos',
    '03_tda',
    '04_repeticion',
    '05_decision',
    '06_modularizacion'
];

// Crear directorio de resultados si no existe
if (!file_exists('results')) {
    mkdir('results', 0755, true);
}

// Procesar cada archivo
foreach ($files as $file) {
    echo "Procesando $file.php...\n";
    
    // Ejecutar el archivo PHP y capturar su salida
    ob_start();
    include $file . '.php';
    $resultado = ob_get_clean();
    
    // Guardar el resultado en un archivo HTML
    file_put_contents('results/' . $file . '_result.html', $resultado);
    
    echo "Resultado guardado en results/{$file}_result.html\n";
}

echo "¡Todos los archivos procesados correctamente!\n";
