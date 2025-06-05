<?php
if ($argc != 4) {
    echo "Usage: php calculatrice.php <nombre1> <operation> <nombre2>\n";
    echo "Operations disponibles : + - * /\n";
    exit(1);
}

$nombre1 = floatval($argv[1]);
$operation = $argv[2];
$nombre2 = floatval($argv[3]);

switch ($operation) {
    case '+':
        $resultat = $nombre1 + $nombre2;
        break;
    case '-':
        $resultat = $nombre1 - $nombre2;
        break;
    case '*':
        $resultat = $nombre1 * $nombre2;
        break;
    case '/':
        if ($nombre2 == 0) {
            echo "Erreur : division par zero\n";
            exit(1);
        }
        $resultat = $nombre1 / $nombre2;
        break;
    default:
        echo "Operation non reconnue. Utilisez +, -, * ou /\n";
        exit(1);
}

echo "Resultat : $resultat\n";
