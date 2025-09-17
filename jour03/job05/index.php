<?php
// Définition de la chaîne
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Définition des voyelles
$voyelles = "aeiouyAEIOUYàâäéèêëîïôöùûüÿ";

// Initialisation du dictionnaire
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Parcours de chaque caractère
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (ctype_alpha($char)) { // on ne compte que les lettres
        if (mb_strpos($voyelles, $char) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage du tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr></tbody>";
echo "</table>";
?>
