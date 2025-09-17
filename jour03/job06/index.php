<?php
// Définition de la chaîne
$str = "Les choses que l'on possède finissent par nous posséder.";

// Méthode 1 : Utiliser strrev() (fonction PHP intégrée)
$inverse = strrev($str);
echo "Chaîne inversée (strrev) : " . $inverse . "<br>";

// Méthode 2 : Parcours manuel
$inverse_manuel = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $inverse_manuel .= $str[$i];
}
echo "Chaîne inversée (manuel) : " . $inverse_manuel;
?>
