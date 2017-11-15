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


    for($tab){
        for($row = 1; $row < 200; $row++){
            echo "<tr>";

            for($col = 1; $col < 200; $col++){
                echo "<td>&nbsp;</td>";
            }
            echo "</tr>";
        }
    }
    ?>

</table>
</body>
</html>