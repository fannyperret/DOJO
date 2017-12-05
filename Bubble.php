<?php

/*
 * count = pour compter la taille d'un tableau (pour savoir et connaître la taille d'un tableau
 * deux fonctions = generateArray ET displayArray
 * $this ne peux exister qu'à l'intérieur d'une classe
 * les fonctions statiques ont les appelle directement à partir de la classe
 */

class Bubble
{
    public static function generateArray($number) // génération du tableau aléatoire
    {
        $result = [];
        for($i = 1; $i <= $number; $i++) {
            $result[] = rand(1, 100);
        }
        return $result;
    }
    public static function displayArray($data)
    {
        for($i = 1; $i < count($data); $i++) {
            echo $data[$i];
            if($i < count($data) - 1) {
                echo ", ";
            }
        }
        echo PHP_EOL;
    }
    public static function sort(&$data) // fonction de tri à bulles
    {
        // on parcourt le tableau du début à la fin.
        // si l'élément n > n+1 on échange n et n+1
        // on recommence tant qu'il y a au moins 1 échange
        // faire le tri à Bulle
        // faire les échanges directement dans la variable $data
    }
}

$data = Bubble::generateArray(100);
Bubble::sort ($data);
Bubble::displayArray($data);