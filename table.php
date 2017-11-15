<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .color1{
            background-color: sandybrown;
        }
        .color2{
            background-color: aqua;
        }
    </style>
</head>

<?php
$cols = $_GET["cols"]; // sur l'URL ?cols
$rows = $_GET["rows"]; // on a nos deux valeurs
$change = $_GET["color"]; // h = lignes, v = colonnes
?>

<body>
<table border="1">
    <?php
    $counter = 0; // création d'une variable qu'on initialise à 0
    $swap = true;
    $color = "";
    for ($row = 1; $row <= $rows; $row++){
        echo "<tr>";
        if ($change === "h"){
            $swap = !($swap);
            $color = ($swap) ? 'color1' : 'color2' ;
        }

        if ($change === "v") {
           $swap = true;
        }

        for ($col = 1; $col <= $cols; $col++){
            $counter++;
            if ($change === "v" || $change === "d") {
                $swap = !$swap;
                $color = ($swap) ? 'color1' : 'color2';

            }
            echo "<td class='$color'>$counter</td>";
        }
        echo "<"
        if ($rows % 2 == 0) {
            $swap = !$swap;
        }
        echo "</tr>";
    }

    // http://localhost:63342/DOJO/table.php?cols=12&rows=12&color=h
    // http://localhost:63342/DOJO/table.php?cols=12&rows=12&color=v
    ?>
</table>
</body>
</html>