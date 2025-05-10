<?php
// Configuración para mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Función para generar un mensaje de error con estilo
function showError($title, $message) {
    echo '<div class="error-container">';
    echo '<h3>' . htmlspecialchars($title) . '</h3>';
    echo '<p>' . htmlspecialchars($message) . '</p>';
    echo '</div>';
}

// Verificar si se ha enviado un archivo
if (isset($_POST['file'])) {
    // Filtrar el nombre del archivo para seguridad
    $file = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['file']);
    
    // Verificar que el archivo exista
    if (file_exists($file . '.php')) {
        // Iniciar buffer de salida
        ob_start();
        
        try {
            // Incluir el archivo
            include $file . '.php';
            
            // Obtener el contenido del buffer y limpiarlo
            $output = ob_get_clean();
            
            // Devolver la salida
            echo $output;
        } catch (Exception $e) {
            ob_end_clean();
            showError('Error al ejecutar el archivo', $e->getMessage());
        } catch (Error $e) {
            ob_end_clean();
            showError('Error de PHP', $e->getMessage());
        }
    } else {
        showError('Archivo no encontrado', 'El archivo solicitado "' . $file . '.php" no existe.');
    }
} else {
    showError('Error de solicitud', 'No se ha especificado ningún archivo para ejecutar.');
}
?>
