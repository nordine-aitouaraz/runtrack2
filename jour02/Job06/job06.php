<?php

$largeur = 20;  // nombre de colonnes (modifiables)
$hauteur = 10;  // nombre de lignes (modifiables)

for ($ligne = 1; $ligne <= $hauteur; $ligne++) {
    for ($colonne = 1; $colonne <= $largeur; $colonne++) {
        echo "*";
    }
    echo "<br>"; // retour à la ligne après chaque ligne de *
}

?>

     