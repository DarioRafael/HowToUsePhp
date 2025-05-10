<?php
/**
 * Clase Usuario de ejemplo para demostrar la modularización
 */

class Usuario {
    private $nombre;
    private $email;
    
    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }
    
    public function obtenerInformacion() {
        return "Nombre: {$this->nombre}, Email: {$this->email}";
    }
    
    public function cambiarEmail($nuevoEmail) {
        $this->email = $nuevoEmail;
    }
}
?>
