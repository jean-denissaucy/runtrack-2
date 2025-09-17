<?php
// Création de la variable string
$str = "I'm sorry Dave I'm afraid I can't do that";

// Ensemble des voyelles à rechercher
$voyelles = "aeiouyAEIOUY";

// Parcours de chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>
