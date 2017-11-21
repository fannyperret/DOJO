<?php

$maxPomme = 100;
$panier = 0;
$price = 3.45; // prix au kilo des pommes de plus de 100gr
$priceJuice = 1.57; // prix au kilo des pommes de moins de 100gr
$juiceCost = $panier; // prix au kilo des pommes à jus
$poidsPanier = 0;
$poidsPommeJus = 0;
$coeffTransform = 0.75;

for($i = 0; $i < $maxPomme; $i++) {
    $pomme = rand(50, 150);
    if ($pomme >= 100) {
        $poidsPanier += $pomme;
        $panier++;
    } else {
        $poidsPommeJus += $pomme;
    }
}
$coutFabrication = $poidsPommeJus * $juiceCost;
$litres = $poidsPommeJus * $coeffTransform;
$priceJusPomme = ($litres * $priceJuice) + $coutFabrication;

echo "Pommes dans mon panier : " . $panier . PHP_EOL;
echo "Pommes pour le jus : " . ($maxPomme - $panier) . PHP_EOL;
echo "Prix du panier : " . round(($poidsPanier / 1000) * $price, 2) . PHP_EOL;
echo "Prix du jus de pomme : " . round(($priceJusPomme / 1000) * $price,2) . PHP_EOL;