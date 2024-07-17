<?php
echo "Digite uma letra (F ou M): ";
$letra = trim(fgets(STDIN));


switch (strtoupper($letra)) {
    case 'F':
        echo "Feminino\n";
        break;
    case 'M':
        echo "Masculino\n";
        break;
    default:
        echo "Sexo inválido\n";
}
?>