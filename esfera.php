<?php
define("PI", 3.141592); // constante PI

$raio = 5; // valor do raio da esfera

$area = 4 * PI * pow($raio, 2); // fórmula da área
$volume = (4/3) * PI * pow($raio, 3); // fórmula do volume

echo "Raio da esfera: $raio<br>";
echo "Área da esfera: " . number_format($area, 2) . "<br>";
echo "Volume da esfera: " . number_format($volume, 2);
?>