<?php

echo "Digite seu peso (em kg): ";
$peso = trim(fgets(STDIN));

echo "Digite sua altura (em metros): ";
$altura = trim(fgets(STDIN));


$peso = (float)$peso;
$altura = (float)$altura;


$imc = $peso / ($altura * $altura);


if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    $classificacao = "Peso normal";
} elseif ($imc >= 25 && $imc < 29.9) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}


echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "\n";
echo "Classificação: $classificacao\n";
?>