<?php

echo "Digite a temperatura em graus Celsius: ";
$celsius = trim(fgets(STDIN));


$celsius = (float)$celsius;


$fahrenheit = ($celsius * 9/5) + 32;


echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2, ',', '.') . " °F\n";
?>