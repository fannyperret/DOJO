<?php

/** 
Etape 1 :

Un champs de x hectares (1 hec = 10000m²)
rendement = 3,45 tonnes par hectare
epluchage enlève 3,8% du poids de la pomme de terre
coût de la frite (kg) = 0,32 cts

combien mon champs me rapportera en fonction du coût de la frite ?

 Par 10 000m2 = 3,45 tonnes X 1000 (=3 450kg de pdt)
 3 450kg - 3,8% de son poids => 3 450 % 3,8 = 131,1 => 3 450 - 131,1 = 3 318,9 kg = donc 3 318,9 kg après épluchage !
 3 318,9 X 0,32 = 1062,048 euros par hectare !

$champ = 0
$potatoe = 3,45
$epluchage = 3,8%
$frite = 0.32

Etape 2 :

MacDo revend la portion 200gr de frites à 3€
MacDO à un prix de fabrication de 5,70€ au kilo

quelle est la marge de MacDo ?

un kilo = 200gr X 5 donc 5 X 3 = 15 euros le kilo chez McDo
 * Prix de fabrication + prix de l'agriculteur = 5,70 + 0,32 = 6,02
 * Prix de vente Mcdo - coût achat pour McDo = 15 - 6,02 = 8,98




 */

class Chips
{
    const PERFORMANCE = 3.45; // tonnes à l'hectare
    const CHIPS_COST = 0.32; // prix de la frite au kilo
    const PEELING = 3.8; // % poifd retiré par l'épluchage
    const MACDO_COST = 5.7; // coût fabrication au kilo
    const MACDO_SELLING = 15; // prix vente au kilo

    public function getFieldPerformance($hectare)
    {
        $kilos = $hectare * self::PERFORMANCE * 1000;
        $cost = ($kilos * self::CHIPS_COST) - (($kilos * self::CHIPS_COST) * (self::PEELING / 100));
        return round($cost, 2);
    }

    public function getMacdoMargin()
    {
        $result = (self::CHIPS_COST + self::MACDO_COST) / self::MACDO_SELLING;
        return round(100 - ($result * 100), 2);
    }

}

$chips = new Chips();
echo "Performance pour 1 hectare : " . $chips->getFieldPerformance(1) . PHP_EOL;
echo "Performance pour 1 hectare : " . $chips->getFieldPerformance(5) . PHP_EOL;
echo "Marge MacDo : " . $chips->getMacdoMargin() . PHP_EOL;












