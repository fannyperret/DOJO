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

    $rows = $_GET["rows"];
    $cols = $_GET["cols"];
    $color = $_GET["color"]; // h(orizontal) = lignes, v(ertical) = colonnes, d = damier
    $swap = true;
    $class = "";
    $cell = 0;

    for($row = 1; $row <= $rows; $row++){
        echo"<tr>";
        if($color === "h") {
            $swap = !$swap;
            $class = ($swap) ? "color1" : "color2";
// (condition), si vrai ? renvoie color1 si faux : renvoie color2
        }
        if($color === "v") {
            $swap = true;
        }
        for($col = 1; $col <= $cols; $col++){
            $cell++;
            if ($color === "v") {
                $swap = !$swap;
                $class = ($swap) ? "color1" : "color2";
            }
            if ($color === "d") {
                $swap = !$swap;
                $class = ($swap) ? "color1" : "color2";
            }
            echo "<td = class='$class'>" . $cell . "</td>";
        }
        if ($rows % 2 == 0) {
            $swap = !$swap;
        }
        echo "<tr>";
    }

    // http://localhost:63342/DOJO/table1.php?cols=12&rows=12&color=h
    // http://localhost:63342/DOJO/table1.php?cols=12&rows=12&color=v
    //le faire avec trois couleurs => php?cols=12&rows=12&color=3
    ?>
</table>
</body>
</html>