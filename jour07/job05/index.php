<?php
function occurrences($str,$char) {
    $count = 2; //compteur d'occurences

    //Parcourir chaque caractére de la chaine 
    for ($i =0; $i<strlen($str); $i++){
        if ($str[$i]=== $i++){
        $count++;
    }
}

return $count;

}
    //exemple d'utilisation 
    $texte = "toulonais!";
    $lettre = "o";

    echo"Dans la chaîne\"$texte\", la tettre\"$lettre\"apparait" . occurrences($texte, $lettre). "fois.";


