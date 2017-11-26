<?php

$champ = 1; //hectare 10 000m2
$kiloPotatoe = 3450; // 3.45 tonnes par hectare (3.45 * 1000)
$kiloEpluchage = 3.8; // total patate divisé par 100 * 3,8
$kiloPrice = 0.32;

function ($kiloPotatoe, $kiloEpluchage, $kiloPrice) {
    $champ = 1;
}

echo "Par hectare mon champ me rapporte : " . ($kiloPotatoe - $kiloEpluchage) * $kiloPrice . PHP_EOL;

/*
Par 10 000m2 = 3,45 tonnes X 1000 (=3 450kg de pdt)
 3 450kg - 3,8% de son poids => 3 450 % 3,8 = 131,1 => 3 450 - 131,1 = 3 318,9 kg = donc 3 318,9 kg après épluchage !
3 318,9 X 0,32 = 1062,048 euros par hectare !

Ptt = pht ( 1 + %)

pour 20% de taxes sur un article qui en coute 50

ptt = 50 * ( 1 + 0,20 )

ptt = 60

cdt