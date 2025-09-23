<?php
// définition de la fonction
function bonjour($jour){
    if ($jour===true) {
        echo "bonjour";
        }else{
            echo"bonsoir";
    
    }
}

//tests
bonjour(true);      //affiche: bonjour
echo"<br>";
bonjour(false);     //affiche: bonsoir
