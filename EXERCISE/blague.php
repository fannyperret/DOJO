<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="blague.css">
    <title>Joke</title>
</head>
<body>

<div class="blague">
    <div class="text_one">
    <?php

    $blague = 1;

    while ($blague <= 10)
    {
        echo '<h1>Vous connaissez la blague du mec qui a oublié d\'augmenter la variable dans sa boucle while ?</h1>';
        $blague++;
    }
    ?>
    </div>
    <div class="text_two">
    <?php
    if ($blague = 10)
    {
        echo'<h2>Les blagues les plus courtes sont les meilleures</h2>';
    }

    ?>
    </div>
</div>

</body>
</html>
