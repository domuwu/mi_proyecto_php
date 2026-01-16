<?php
//Código PHP VA AQUÍ
# Esto es un comentario de una línea
/*
Esto es un comentario
multilínea
*/
//Imprimir información
echo "Hola mundo";
echo "<h1>Hola desde PHP</h1>";
echo "<p>Esto lo genera el servidor</p>";
//Variables
//Todas las variables empiezan con $
$nombre = "Angie"; //string
$edad = 27; //int
$activo = true; //boolean
$decimal = 3.14; //float
$nulo = null; //null
echo $nombre;
echo "<br>";
echo $edad;
echo "<br>";
var_dump($nombre); //Muy util para depuración en PHP
echo "<br>";
//Concatenación de strings
echo "Hola" . $nombre;
//Operadores basicos
$suma = 5 + 3;
$resta = 5 - 3;
$multi = 5 * 3;
$div = 5 / 3;
//Operadores de comparacion
$a = 5;
$b = 8;
$a == $b; //Igual valor
$a === $b; //Igual valor y tipo
$a != $b; //diferente de
$a > $b;
$a < $b;
echo "<br>";
//Estructurales condicionales
$edad = 10;
if ($edad >= 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
echo "<br>";
// If / elseif / else
$nota = 8;
if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 7) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
echo "<br>";
//Estructuras repetitivas
//While
$i = 0;
while ($i < 5) {
    echo $i . "<br>";
    $i++;
}
echo "<br>";
//For
for ($i = 0; $i < 5; $i++) {
    echo "Numero: $i <br>";
}
//Arreglos en PHP
//Array indexado
$colores = ["rojo", "azul", "verde", "negro", "blanco"];
echo $colores[0];
echo "<br>";
//Recorrer array
foreach ($colores as $color) {
    echo $color . "<br>";
}
//Array asociativo
$persona = [
    "nombre" => "Angie",
    "edad" => 27,
    "ciudad" => "Guayaquil"
];
echo $persona["ciudad"];
