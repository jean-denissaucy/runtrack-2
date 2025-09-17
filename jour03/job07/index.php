<?php
// Définition de la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Résultat initialisé
$result = "";

// Parcours de la chaîne (sauf le dernier caractère)
for ($i = 0; $i < strlen($str) - 1; $i++) {
    $result .= $str[$i + 1];
}

// Le dernier caractère prend la valeur du premier
$result .= $str[0];

// Affichage du résultat
echo "Chaîne transformée : " . $result;
?>
