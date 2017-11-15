<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>

    <?php
    // On rend dynamique la taille du tableau ($_GET)
    // Dans chaque case afficher un numéro
    // 3 Jouer sur le CSS = un damier au niveau des couleurs de fond
    //OBJECTIF : un damier dynamique

    $rows = $_GET["rows"];
    $cols = $_GET["cols"];
    $swap = true;
    $cel = 0;
    $class = "";

    for($row = 1; $row <= $rows; $row++){
        echo "<tr>";
        for($col = 1; $col <= $cols; $col++){
            $cel++;
            //$swap = !$swap;
            if ($swap === true){
                $swap = false;
                $class = "color1";
            } else {
                $swap = true;
                $class = "color2";
            }
            //$class = ($swap) ? "color1" : "color2";

            echo "<td class='$class'>" . $cel . "</td>";
        }
        if ($col % 2 == 0){
            if($swap === true){
                $swap = false;
                $class = "color1";
            } else {
                $swap = true;
                $class = "color2";
            }
            //$swap = !$swap
        }
    }

    ?>

</table>
</body>
</html>