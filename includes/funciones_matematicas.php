<?php
/**
 * Funciones matemáticas de ejemplo para demostrar la modularización
 */

function areaCirculo($radio) {
    return pi() * pow($radio, 2);
}

function perimetroRectangulo($ancho, $alto) {
    return 2 * ($ancho + $alto);
}

function volumenCubo($lado) {
    return pow($lado, 3);
}
?>
