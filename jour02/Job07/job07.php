<?php

$hauteur = 5;

echo "<pre>";

for ($i = 1; $i <= $hauteur; $i++) {

    
    for ($espace = 1; $espace <= $hauteur - $i; $espace++) {
        echo " ";
    }

    
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        if ($j == 1) {
            echo "/";
        } elseif ($j == (2 * $i - 1)) {
            echo "\\";
        } elseif ($i == $hauteur) {
            echo "_";
        } else {
            echo " ";
        }
    }

    echo "\n";
}

echo "</pre>";

?>
