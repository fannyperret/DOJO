<!--

Exercice 2 : prendre une seule fonction qui prend TROIS arguments en entrée :
1 : un chiffre entier
2 : un opérateur représenté par un +, - ou diviser
3 : caractère unique qui peut être soit le symbole +, -, x ou / (plus, moins, fois diviser) un chiffre entier (le deuxième)

Il faut faire une micro-calculatrice

ma solution trouvée qui est bonne mais trop compliquée

function calcul($a, $b)
{
    $add = $a+$b;
    $sous = $a-$b;
    $multi = $a*$b;
    $div = $a/$b;
    return array($add, $sous, $multi, $div);
}

list($add, $sous, $multi, $div) = calcul(2, 3);

echo $sous;

-->




<?php

/**
 * @param $a
 * @param $operateur
 * @param $b
 * @return string
 */
function calculatrice($a, $operateur, $b)
{
    $result = 0;

    switch ($operateur) {
        case $operateur === "*":
            $result = $a * $b;
            break;
        case $operateur === "+":
            $result = $a + $b;
            break;
        case $operateur === "-":
            $result = $a - $b;
            break;
        case $operateur === "/":
            $result = $a / $b;
            break;
        default:
            $result = "Bah non ! Ca ne marche pas ! Tu dois entrer des données correctes pour ma super calculatrice !";
            break;
    }

    return "Grâce à ma super calculette $a $operateur $b est égal à : $result";

}

echo calculatrice(4,"`", 9 );

?>









