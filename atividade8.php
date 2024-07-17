<?php

echo "Digite o preço do primeiro produto: ";
$preco1 = trim(fgets(STDIN));

echo "Digite o preço do segundo produto: ";
$preco2 = trim(fgets(STDIN));

echo "Digite o preço do terceiro produto: ";
$preco3 = trim(fgets(STDIN));


$preco1 = (float)$preco1;
$preco2 = (float)$preco2;
$preco3 = (float)$preco3;


$produtoEscolhido = 1; 

if ($preco2 < $menorPreco) {
    $menorPreco = $preco2;
    $produtoEscolhido = 2;
}
if ($preco3 < $menorPreco) {
    $menorPreco = $preco3;
    $produtoEscolhido = 3;
}


echo "O produto mais barato é o Produto $produtoEscolhido, com preço de: R$ " . number_format($menorPreco, 2, ',', '.') . "\n";
?>
