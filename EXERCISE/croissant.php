<?php

function max($liste) {
    $maxActuel = 0;
    foreach($liste as $element)
        if($element > $maxActuel)
            $maxActuel = $element;
    return $maxActuel;
}

// doesn't work...