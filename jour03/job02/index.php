<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Afficher un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
echo "\n"; // Saut de ligne après la sortie
?>