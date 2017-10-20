<?php

$firstName = "Jean"; // Toujours DOUBLES GUILLEMETS quand on veut signifier que la fonction EST VIDE
$lastName = "Dupond";

echo greeting($firstName, $lastName);
echo greeting("Eric", "");
echo greeting("", "");

function greeting($firstName, $lastName)
{
    if ($firstName !== "" and $lastName !== "") {
        return "Bonjour $lastName $firstName" . PHP_EOL;
    } elseif ($firstName !== "") {
        return "Bonjour $firstName" . PHP_EOL;
    } else {
        return "Bonjour toi " . PHP_EOL;
    }
}