<?php
/**
 * Created by PhpStorm.
 * User: fannyperret
 * Date: 22/09/2017
 * Time: 15:11

 travail sur conditions, boucle for, manipulation de chaîne.
 * Le but de ce dojo est d'afficher le score courant d'un match de tennis. On a en entrée une chaîne de caractères composée des caractères '1' et '2'
 * qui indique la séquence des points marqués.
 * Par exemple la chaîne "11122" inidque que le joueur 1 a marqué les toris premiers points puis le joueur 2 en a marqué 2 et le joueur 1 marque le dernier point du jeu. Le score est retournée sous la forme "setJ1/setJ2 - jeuJ1/jeuJ2 - pointJ1/pointJ2"
 */

function tennis($value)
{
    $joueur1 = 0;
    $joueur2 = 0;

    $tennis = ['0', '15', '30', '40'];

    $totalPoints = strlen($value);
    for ($i = 0; $i < $totalPoints; $i++) {
        if ($value[$i] === '1'){
            $joueur1++;
        } else {
            $joueur2++;
        }
    }
    return $tennis[$joueur1] . "/" . $tennis[$joueur2];

}

echo tennis("1112");





