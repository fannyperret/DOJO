<?php

$firstName = "Fanny";
$lastName = "Perret";
$nickName = "Funny";

echo greeting($firstName, $lastName, $nickName);
echo greeting("Brigitte", "", "");
echo greeting("", "", "");
echo greeting ("", "Perret", "");

function greeting($firstName, $lastName, $nickName)

{
    if ($firstName !== "" && $lastName !== "" && $nickName !== "") {
        return "Bonjour $firstName $lastName avec le pseudo $nickName" . PHP_EOL;
    } elseif ($firstName !== "") {
        return "Bonjour $firstName" . PHP_EOL;
    } elseif ($lastName !== "") {
        return "Bonjour Mr $lastName" . PHP_EOL;
    } else {
        return "Désolée je ne vous connais pas" . PHP_EOL;
    }
}