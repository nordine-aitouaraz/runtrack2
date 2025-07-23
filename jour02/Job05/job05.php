<?php

for ($nombre = 2; $nombre <= 1000; $nombre++) {
    $est_premier = true;

    for ($diviseur = 2; $diviseur <= sqrt($nombre); $diviseur++) {
        if ($nombre % $diviseur == 0) {
            $est_premier = false;
            break;
        }
    }

    if ($est_premier) {
        echo "$nombre<br>";
    }
}

?>
