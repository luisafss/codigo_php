<?php

echo "Digite o primeiro número: ";
$numero1 = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$numero2 = trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$numero3 = trim(fgets(STDIN));


$numero1 = (float)$numero1;
$numero2 = (float)$numero2;
$numero3 = (float)$numero3;

$maior = $numero1;
$menor = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}
if ($numero3 > $maior) {
    $maior = $numero3;
}

if ($numero2 < $menor) {
    $menor = $numero2;
}
if ($numero3 < $menor) {
    $menor = $numero3;
}

echo "O maior número é: $maior\n";
echo "O menor número é: $menor\n";
?>