<?php

echo "Digite um número positivo: ";
$numero = trim(fgets(STDIN));


$numero = (int)$numero;

if ($numero <= 0) {
    echo "Por favor, insira um número positivo.\n";
} else {
   
    for ($i = $numero; $i >= 0; $i--) {
        echo "$i\n";
      
        sleep(1);
    }
}
?>