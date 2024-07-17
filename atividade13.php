<?php
echo "Digite um número inteiro: ";
$numero = trim(fgets(STDIN));


$numero = (int)$numero;


function isPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isPrimo($numero)) {
    echo "$numero é um número primo.\n";
} else {
    echo "$numero não é um número primo.\n";
}
?>
