<?php

$firstName = "Jean";
$lastName = "Dupond";

    if ($firstName !== "" and $lastName !== "") {
        echo "Bonjour $lastName $firstName" . PHP_EOL;
    } elseif ($firstName !== "") {
        echo "Bonjour $firstName" . PHP_EOL;
    } else {
        echo "Bonjour toi " . PHP_EOL;
    }

    /* cette solution est moins pratique la solution name.php puisqu'elle est plus courte mais on peut l'améliorer