<?php

$tocompute = [

    "5:*:4", // = 5 * 4 = 20
    "2:/:2", // 1
    "14:+:65", // 79
    "5:2", // 25
    "5:%:8", // je ne connais pas cet opérateur
    "3:/:0", // division par 0 impossible

    ];

foreach ($tocompute as $oneCalc) {
    echo compute($oneCalc) . PHP_EOL;
}

function compute(string $calc)
{
    $args = explode(":", $calc);
    $a = $args[0];
    if(isset($args[2])){
        $b = $args[2];
    }
    $operator = $args[1];
    $result = 0;
    switch ($operator) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            if($b != 0) {
                $result = $a / $b;
            } else {
                $result = "Erreur, division impossible par zéro !";
            }
            break;
        case '2':
            $result = $a * $a;
            break;
        default:
            $result = "Je ne peux pas faire cette opération";
            break;
    }
    return $result;
}

// Pour mercredi : si on lui passe un opérateur qu'il ne connait pas il dise : je ne peux pas faire cette opération
// Que ça ne génère pas de message d'erreur : "division par 0 impossible"
// Rajouter l'opérateur carré, le chiffre 2. Et que quand on veut faire un carré on ne lui passe pas le nombre 2 "5:2" = il doit renvoyer 25
