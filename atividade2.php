<?php
echo "Digite um valor: ";
$valor = trim(fgets(STDIN));
$valor = (float)$valor;

if ($valor > 0) {
    echo "O valor é positivo.\n";
} elseif ($valor < 0) {
    echo "O valor é negativo.\n";
} else {
    echo "O valor é zero.\n";
}
?>

