<?php
/**
 * Ejemplos de Tipos de Datos Abstractos (TDA) en PHP
 * 
 * Los TDA son estructuras de datos que encapsulan un conjunto de datos y operaciones para manipularlos.
 * En PHP, los TDA se implementan principalmente a través de clases y objetos.
 */

// Configuración para mostrar el resultado
echo "<div style='background-color: #f9f9f9; padding: 20px; border-radius: 8px; font-family: Arial, sans-serif;'>";
echo "<h1 style='color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 10px;'>TIPOS DE DATOS ABSTRACTOS EN PHP</h1>";

// INTRODUCCIÓN
echo "<div style='background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 20px;'>";
echo "<p style='font-size: 16px;'><strong>Los Tipos de Datos Abstractos (TDA)</strong> son estructuras que encapsulan datos y operaciones relacionadas. En PHP, se implementan mediante <span style='color: #e74c3c;'>clases y objetos</span>, siguiendo los principios de la Programación Orientada a Objetos.</p>";
echo "</div>";

// ======================= TDA PUNTO =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>1. TDA PUNTO</h2>";

// Mostramos el código
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("class Punto {
    // Propiedades (atributos) del TDA
    private \$x;
    private \$y;
    
    // Constructor: inicializa el estado del objeto
    public function __construct(\$x = 0, \$y = 0) {
        \$this->x = \$x;
        \$this->y = \$y;
    }
    
    // Getters y Setters
    public function getX() { return \$this->x; }
    public function getY() { return \$this->y; }
    public function setX(\$x) { \$this->x = \$x; }
    public function setY(\$y) { \$this->y = \$y; }
    
    // Método para calcular la distancia a otro punto
    public function distanciaA(Punto \$otroPunto) {
        \$dx = \$this->x - \$otroPunto->getX();
        \$dy = \$this->y - \$otroPunto->getY();
        return sqrt(pow(\$dx, 2) + pow(\$dy, 2));
    }
    
    // Método para representar el punto como string
    public function toString() {
        return \"(\$this->x, \$this->y)\";
    }
}");
echo "</code>";
echo "</div>";

// Definimos la clase para poder usarla
class Punto {
    private $x;
    private $y;
    
    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX() { return $this->x; }
    public function getY() { return $this->y; }
    public function setX($x) { $this->x = $x; }
    public function setY($y) { $this->y = $y; }
    
    public function distanciaA(Punto $otroPunto) {
        $dx = $this->x - $otroPunto->getX();
        $dy = $this->y - $otroPunto->getY();
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
    
    public function toString() {
        return "($this->x, $this->y)";
    }
}

// Explicación del TDA Punto
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del TDA Punto:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Atributos:</strong> Coordenadas x e y (private)</li>";
echo "<li><strong>Constructor:</strong> Inicializa las coordenadas</li>";
echo "<li><strong>Métodos de acceso:</strong> Getters y setters para cada coordenada</li>";
echo "<li><strong>Métodos de operación:</strong> Cálculo de distancia entre puntos</li>";
echo "</ul>";
echo "</div>";

// Ejemplo de uso del TDA Punto - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de uso del TDA Punto</h3>";

$punto1 = new Punto(3, 4);
$punto2 = new Punto(7, 9);

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px;'>";
echo "// Crear dos instancias de Punto\n";
echo "\$punto1 = new Punto(3, 4);\n";
echo "\$punto2 = new Punto(7, 9);\n\n";
echo "// Mostrar los puntos\n";
echo "echo \"Punto 1: \" . \$punto1->toString();\n";
echo "echo \"Punto 2: \" . \$punto2->toString();\n\n";
echo "// Calcular la distancia entre los puntos\n";
echo "echo \"Distancia: \" . \$punto1->distanciaA(\$punto2);\n\n";
echo "// Modificar las coordenadas del punto 1\n";
echo "\$punto1->setX(5);\n";
echo "\$punto1->setY(6);\n";
echo "echo \"Punto 1 modificado: \" . \$punto1->toString();\n";
echo "</pre>";

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px; margin-top: 10px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Punto 1: " . $punto1->toString() . "<br>";
echo "Punto 2: " . $punto2->toString() . "<br>";
echo "Distancia entre puntos: " . $punto1->distanciaA($punto2) . "<br><br>";

// Cambiamos las coordenadas del punto 1
$punto1->setX(5);
$punto1->setY(6);
echo "Punto 1 modificado: " . $punto1->toString() . "<br>";
echo "Nueva distancia entre puntos: " . $punto1->distanciaA($punto2) . "<br>";
echo "</div>";
echo "</div>";

// ======================= TDA PILA =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>2. TDA PILA (STACK)</h2>";

// Mostramos el código
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("class Pila {
    // Atributos
    private \$elementos = [];
    private \$tamañoMax;
    
    // Constructor
    public function __construct(\$tamañoMax = 10) {
        \$this->tamañoMax = \$tamañoMax;
    }
    
    // Método para añadir un elemento a la pila (push)
    public function push(\$elemento) {
        if (count(\$this->elementos) < \$this->tamañoMax) {
            array_push(\$this->elementos, \$elemento);
            return true;
        }
        return false; // Pila llena
    }
    
    // Método para sacar un elemento de la pila (pop)
    public function pop() {
        if (!\$this->estaVacia()) {
            return array_pop(\$this->elementos);
        }
        return null; // Pila vacía
    }
    
    // Método para ver el elemento en la cima sin sacarlo (peek)
    public function peek() {
        if (!\$this->estaVacia()) {
            return end(\$this->elementos);
        }
        return null;
    }
    
    // Método para comprobar si la pila está vacía
    public function estaVacia() {
        return empty(\$this->elementos);
    }
    
    // Método para obtener el tamaño actual de la pila
    public function tamaño() {
        return count(\$this->elementos);
    }
    
    // Método para representar la pila como string
    public function toString() {
        return implode(\", \", array_reverse(\$this->elementos));
    }
}");
echo "</code>";
echo "</div>";

// Definimos la clase para poder usarla
class Pila {
    private $elementos = [];
    private $tamañoMax;
    
    public function __construct($tamañoMax = 10) {
        $this->tamañoMax = $tamañoMax;
    }
    
    public function push($elemento) {
        if (count($this->elementos) < $this->tamañoMax) {
            array_push($this->elementos, $elemento);
            return true;
        }
        return false;
    }
    
    public function pop() {
        if (!$this->estaVacia()) {
            return array_pop($this->elementos);
        }
        return null;
    }
    
    public function peek() {
        if (!$this->estaVacia()) {
            return end($this->elementos);
        }
        return null;
    }
    
    public function estaVacia() {
        return empty($this->elementos);
    }
    
    public function tamaño() {
        return count($this->elementos);
    }
    
    public function toString() {
        return implode(", ", array_reverse($this->elementos));
    }
}

// Explicación del TDA Pila
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del TDA Pila:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Principio LIFO:</strong> Last In, First Out (Último en entrar, primero en salir)</li>";
echo "<li><strong>Atributos:</strong> Arreglo de elementos y tamaño máximo</li>";
echo "<li><strong>Operaciones principales:</strong></li>";
echo "<ul>";
echo "<li><span style='color: #e74c3c;'>push():</span> Añade un elemento a la cima</li>";
echo "<li><span style='color: #e74c3c;'>pop():</span> Elimina y devuelve el elemento de la cima</li>";
echo "<li><span style='color: #e74c3c;'>peek():</span> Consulta el elemento de la cima sin eliminarlo</li>";
echo "</ul>";
echo "</ul>";

// Ilustración de una pila
echo "<div style='text-align: center; margin: 15px 0;'>";
echo "<div style='display: inline-block; text-align: center;'>";
echo "<div style='width: 150px; margin: auto; border: 2px solid #34495e; border-radius: 5px; overflow: hidden;'>";
echo "<div style='background-color: #3498db; color: white; padding: 5px;'>Cima</div>";
echo "<div style='background-color: #ecf0f1; padding: 5px; border-bottom: 1px solid #bdc3c7;'>Elemento 3</div>";
echo "<div style='background-color: #ecf0f1; padding: 5px; border-bottom: 1px solid #bdc3c7;'>Elemento 2</div>";
echo "<div style='background-color: #ecf0f1; padding: 5px;'>Elemento 1</div>";
echo "</div>";
echo "<p style='margin-top: 5px;'><em>Estructura de una pila</em></p>";
echo "</div>";
echo "</div>";
echo "</div>";

// Ejemplo de uso del TDA Pila - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de uso del TDA Pila</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px;'>";
echo "// Crear una pila con tamaño máximo de 5\n";
echo "\$pila = new Pila(5);\n\n";
echo "// Añadir elementos\n";
echo "\$pila->push(10);\n";
echo "\$pila->push(20);\n";
echo "\$pila->push(30);\n\n";
echo "// Mostrar la pila y su estado\n";
echo "echo \"Elementos en la pila: \" . \$pila->toString();\n";
echo "echo \"Tamaño actual: \" . \$pila->tamaño();\n";
echo "echo \"Elemento en la cima: \" . \$pila->peek();\n\n";
echo "// Sacar un elemento\n";
echo "\$elementoSacado = \$pila->pop();\n";
echo "echo \"Elemento sacado: \$elementoSacado\";\n";
echo "echo \"Elementos restantes: \" . \$pila->toString();";
echo "</pre>";

// Ejecutamos el ejemplo
$pila = new Pila(5);
$pila->push(10);
$pila->push(20);
$pila->push(30);

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px; margin-top: 10px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Elementos en la pila: " . $pila->toString() . "<br>";
echo "Tamaño actual: " . $pila->tamaño() . "<br>";
echo "Elemento en la cima: " . $pila->peek() . "<br><br>";

echo "Sacando un elemento de la pila...<br>";
$elementoSacado = $pila->pop();
echo "Elemento sacado: $elementoSacado<br>";
echo "Elementos restantes: " . $pila->toString() . "<br>";
echo "Nuevo tamaño: " . $pila->tamaño() . "<br>";
echo "</div>";
echo "</div>";

// ======================= TDA COLA =======================
echo "<h2 style='color: #3498db; background-color: #eef2f7; padding: 10px; border-radius: 5px;'>3. TDA COLA (QUEUE)</h2>";

// Mostramos el código
echo "<div style='background-color: #272822; color: #f8f8f2; padding: 15px; border-radius: 5px; overflow: auto; margin-bottom: 15px;'>";
echo "<code style='font-family: Consolas, Monaco, monospace;'>";
echo htmlspecialchars("class Cola {
    private \$elementos = [];
    
    // Método para añadir un elemento al final de la cola (enqueue)
    public function enqueue(\$elemento) {
        array_push(\$this->elementos, \$elemento);
    }
    
    // Método para sacar un elemento del frente de la cola (dequeue)
    public function dequeue() {
        if (!\$this->estaVacia()) {
            return array_shift(\$this->elementos);
        }
        return null;
    }
    
    // Método para ver el elemento al frente sin sacarlo
    public function front() {
        if (!\$this->estaVacia()) {
            return \$this->elementos[0];
        }
        return null;
    }
    
    // Método para comprobar si la cola está vacía
    public function estaVacia() {
        return empty(\$this->elementos);
    }
    
    // Método para obtener el tamaño de la cola
    public function tamaño() {
        return count(\$this->elementos);
    }
    
    // Método para representar la cola como string
    public function toString() {
        return implode(\", \", \$this->elementos);
    }
}");
echo "</code>";
echo "</div>";

// Definimos la clase para poder usarla
class Cola {
    private $elementos = [];
    
    public function enqueue($elemento) {
        array_push($this->elementos, $elemento);
    }
    
    public function dequeue() {
        if (!$this->estaVacia()) {
            return array_shift($this->elementos);
        }
        return null;
    }
    
    public function front() {
        if (!$this->estaVacia()) {
            return $this->elementos[0];
        }
        return null;
    }
    
    public function estaVacia() {
        return empty($this->elementos);
    }
    
    public function tamaño() {
        return count($this->elementos);
    }
    
    public function toString() {
        return implode(", ", $this->elementos);
    }
}

// Explicación del TDA Cola
echo "<div style='background-color: #eaf7ea; padding: 15px; border-left: 5px solid #27ae60; margin-bottom: 15px;'>";
echo "<h3 style='color: #27ae60;'>Características del TDA Cola:</h3>";
echo "<ul style='list-style-type: square;'>";
echo "<li><strong>Principio FIFO:</strong> First In, First Out (Primero en entrar, primero en salir)</li>";
echo "<li><strong>Atributos:</strong> Arreglo de elementos</li>";
echo "<li><strong>Operaciones principales:</strong></li>";
echo "<ul>";
echo "<li><span style='color: #e74c3c;'>enqueue():</span> Añade un elemento al final de la cola</li>";
echo "<li><span style='color: #e74c3c;'>dequeue():</span> Elimina y devuelve el elemento del frente</li>";
echo "<li><span style='color: #e74c3c;'>front():</span> Consulta el elemento del frente sin eliminarlo</li>";
echo "</ul>";
echo "</ul>";

// Ilustración de una cola
echo "<div style='text-align: center; margin: 15px 0;'>";
echo "<div style='display: inline-block; text-align: center;'>";
echo "<div style='width: 300px; margin: auto; border: 2px solid #34495e; border-radius: 5px; overflow: hidden;'>";
echo "<div style='display: flex; justify-content: space-between;'>";
echo "<div style='background-color: #3498db; color: white; padding: 5px; width: 80px; text-align: center;'>Frente</div>";
echo "<div style='flex-grow: 1; background-color: #ecf0f1; display: flex;'>";
echo "<div style='padding: 5px; border-right: 1px solid #bdc3c7; flex-grow: 1; text-align: center;'>A</div>";
echo "<div style='padding: 5px; border-right: 1px solid #bdc3c7; flex-grow: 1; text-align: center;'>B</div>";
echo "<div style='padding: 5px; flex-grow: 1; text-align: center;'>C</div>";
echo "</div>";
echo "<div style='background-color: #9b59b6; color: white; padding: 5px; width: 80px; text-align: center;'>Final</div>";
echo "</div>";
echo "</div>";
echo "<p style='margin-top: 5px;'><em>Estructura de una cola</em></p>";
echo "</div>";
echo "</div>";
echo "</div>";

// Ejemplo de uso del TDA Cola - COLOR CORREGIDO
echo "<h3 style='color: #d35400; margin-top: 20px; background-color: #ffeaa7; padding: 8px; border-radius: 5px;'>&#11088; Ejemplo de uso del TDA Cola</h3>";

echo "<div style='background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 2px solid #d35400;'>";
echo "<pre style='background-color: #2c3e50; color: #ecf0f1; padding: 10px; border-radius: 5px;'>";
echo "// Crear una cola\n";
echo "\$cola = new Cola();\n\n";
echo "// Añadir elementos a la cola\n";
echo "\$cola->enqueue(\"A\");\n";
echo "\$cola->enqueue(\"B\");\n";
echo "\$cola->enqueue(\"C\");\n\n";
echo "// Mostrar la cola y su estado\n";
echo "echo \"Cola: \" . \$cola->toString();\n";
echo "echo \"Elemento al frente: \" . \$cola->front();\n\n";
echo "// Sacar un elemento\n";
echo "\$elementoSacado = \$cola->dequeue();\n";
echo "echo \"Elemento sacado: \$elementoSacado\";\n";
echo "echo \"Cola actualizada: \" . \$cola->toString();";
echo "</pre>";

// Ejecutamos el ejemplo
$cola = new Cola();
$cola->enqueue("A");
$cola->enqueue("B");
$cola->enqueue("C");

echo "<div style='background-color: #f0f0f0; padding: 15px; border-radius: 5px; margin-top: 10px;'>";
echo "<strong>Resultado:</strong><br>";
echo "Cola: " . $cola->toString() . "<br>";
echo "Elemento al frente: " . $cola->front() . "<br><br>";

echo "Sacando un elemento de la cola...<br>";
$elementoSacado = $cola->dequeue();
echo "Elemento sacado: $elementoSacado<br>";
echo "Cola actualizada: " . $cola->toString() . "<br>";
echo "Nuevo tamaño: " . $cola->tamaño() . "<br>";
echo "</div>";
echo "</div>";

// ======================= CONCLUSIÓN =======================
echo "<div style='background-color: #f2f8ff; padding: 15px; border-radius: 5px; border: 1px solid #3498db; margin-top: 30px;'>";
echo "<h3 style='color: #3498db; text-align: center;'>RESUMEN DE TDA EN PHP</h3>";
echo "<p style='text-align: center;'>Los Tipos de Datos Abstractos en PHP nos permiten modelar estructuras de datos complejas mediante la encapsulación de atributos y métodos. Estos tres ejemplos (Punto, Pila y Cola) muestran cómo implementar diferentes TDAs usando la programación orientada a objetos en PHP.</p>";
echo "<div style='display: flex; justify-content: space-around; flex-wrap: wrap; margin-top: 20px;'>";
echo "<div style='text-align: center; margin: 10px;'><strong style='color: #3498db;'>TDA Punto</strong><br>Modelo geométrico<br>con coordenadas X,Y</div>";
echo "<div style='text-align: center; margin: 10px;'><strong style='color: #3498db;'>TDA Pila</strong><br>Estructura LIFO<br>Last In, First Out</div>";
echo "<div style='text-align: center; margin: 10px;'><strong style='color: #3498db;'>TDA Cola</strong><br>Estructura FIFO<br>First In, First Out</div>";
echo "</div>";
echo "</div>";

echo "</div>";
?>
