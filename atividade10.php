<?php

echo "Em que turno você estuda? (M - Matutino, V - Vespertino, N - Noturno): ";
$turno = trim(fgets(STDIN));


switch (strtoupper($turno)) {
    case 'M':
        echo "Bom dia!\n";
        break;
    case 'V':
        echo "Boa Tarde!\n";
        break;
    case 'N':
        echo "Boa Noite!\n";
        break;
    default:
        echo "Valor inválido.\n";
}
?>
