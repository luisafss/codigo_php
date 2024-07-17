<?php

echo "Digite uma letra: ";
$letra = trim(fgets(STDIN));


$letra = strtolower($letra);


if (strlen($letra) === 1 && ctype_alpha($letra)) {
    if (in_array($letra, ['a', 'e', 'i', 'o', 'u'])) {
        echo "A letra '$letra' é uma vogal.\n";
    } else {
        echo "A letra '$letra' é uma consoante.\n";
    }
} else {
    echo "Entrada inválida. Por favor, digite apenas uma letra.\n";
}
?>