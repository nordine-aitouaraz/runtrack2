<?php
// j'ai créé une boucle qui affiche les nombres de 0 à 1337

for ($nombre = 0; $nombre <= 1337; $nombre++) {
    // je veux que le nombre 42 soit en gras soulignée
    if ($nombre == 42) {
        echo "<u><b>$nombre</b></u><br><br>";
    } else {
        echo "$nombre<br><br>";
    }
}