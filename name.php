!<!--

On va démarrer avec une variable firstname et la deuxième lastname.
Soit Bonjour Prénom
Soit Bonjour Nom Prénom : si Nom et Prénom sont renseignés.
Sinon on n'affiche rien.

<?php

$firstName = "Jean"; // Toujours DOUBLES GUILLEMETS quand on veut signifier que la fonction EST VIDE
$lastName = "Dupond";

echo greeting($firstName, $lastName);
echo greeting("Eric", "");
echo greeting("", "");

function greeting($firstName, $lastName)
{
    if($firstName !== "" and $lastName !== "") {
        return "Bonjour $lastName $firstName" . PHP_EOL;
    } elseif ($firstName !== "") {
        return "Bonjour $firstName" . PHP_EOL;
    }
    else {
        return "Bonjour toi" . PHP_EOL;
    }
}

?>


ou autre avec echo

$firstName = ""; // Toujours DOUBLES GUILLEMETS quand on veut signifier que la fonction EST VIDE
$lastName = "";

    if ($firstName !== "" and $lastName !== "") {
        echo "Bonjour $lastName $firstName" . PHP_EOL;
    } elseif ($firstName !== "") {
        echo "Bonjour $firstName" . PHP_EOL;
    } else {
        echo "Bonjour toi " . PHP_EOL;
    }
