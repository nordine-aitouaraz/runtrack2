<?php

for ($nombre = 0; $nombre <= 100; $nombre ++) {
    echo "$nombre<br><br>";
    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "FizzBuzz<br><br>";
    } elseif ($nombre % 3 == 0) {
        echo "Fizz<br><br>";
    } elseif ($nombre % 5 == 0) {
        echo "Buzz<br><br>";
    }

}
