<?php
// j'ai créé une variable avec les nombre a ne pas afficher
$nombres_masques = [26, 37, 88, 1111, 3233];

for ($nombre = 0; $nombre <= 1337; $nombre++) {
    if ($nombre == 42) {
        echo "<u><b>$nombre</b></u><br><br>";
        // avec in-array je regarde si le nombre que je ne veux pas affichr est present
    } elseif (in_array($nombre, $nombres_masques)) {
        // si oui alors je le remplace par un tiret (je n'ai pas trouvé comment masquer completement le nombre donc j'ai fais comme j'ai pu)
        echo "-<br />";
    } else {
        echo "$nombre<br><br>";
    }
}
?>
