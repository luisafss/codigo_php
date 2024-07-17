<?php

echo "Digite o salário atual do colaborador: ";
$salario = trim(fgets(STDIN));


$salario = (float)$salario;


$aumento = 0;
$percentual = 0;


if ($salario <= 280.00) {
    $percentual = 20;
    $aumento = $salario * 0.20;
} elseif ($salario > 280.00 && $salario <= 700.00) {
    $percentual = 15;
    $aumento = $salario * 0.15;
} elseif ($salario > 700.00 && $salario <= 1500.00) {
    $percentual = 10;
    $aumento = $salario * 0.10;
} else {
    $percentual = 5; 
    $aumento = $salario * 0.05;
}


$novoSalario = $salario + $aumento;


echo "Salário atual: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Percentual de aumento: $percentual%\n";
echo "Valor do aumento: R$ " . number_format($aumento, 2, ',', '.') . "\n";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "\n";
?>

