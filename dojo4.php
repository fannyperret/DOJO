<?php




function point($value)
{
    $player1 = 0;
    $player2 = 0;

    $tennisPoints = ['0', '15', '30', '40'];

    $nbPoint = strlen($value);
    for ($i = 0; $i < $nbPoint; $i++) {
        if ($value[$i] === "1") {
            $player1++;
        } else {
            $player2++;
        }
    }

    return $tennisPoints[$player1] . "/" . $tennisPoints[$player2];

}

echo point("11221");