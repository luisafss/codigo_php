<?php
echo "Digite o primeiro número: ";
$numero1 = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$numero2 = trim(fgets(STDIN));

$numero1 = (float)$numero1;
$numero2 = (float)$numero2;

if ($numero1 > $numero2) {
    echo "O maior número é: $numero1\n";
} elseif ($numero2 > $numero1) {
    echo "O maior número é: $numero2\n";
} else {
    echo "Os números são iguais.\n";
}
?>