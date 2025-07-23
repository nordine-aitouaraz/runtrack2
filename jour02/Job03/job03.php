<?php

for ($nombre = 0; $nombre <= 100; $nombre++) {
    if ($nombre == 42) {
        echo "LaPlateforme<br><br>";
    } elseif ($nombre <= 20) {
        echo "<i>$nombre</i><br><br>";
    } elseif ($nombre >= 25 && $nombre <= 50) {
        echo "<u>$nombre</u><br><br>";
    } else {
        echo "$nombre<br><br>";
    }
}
?>
