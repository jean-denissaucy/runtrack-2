 <?php
 function calcule($a,$operation,$b){
    switch ($operation) {
        case "+":
            return $a+$b;
        case"-":
            return $a-$b;
        case"*":
            return $a*$b;
        case"/":

            // eviter la division par zéro
            if ($b !=0){
                return $a/$b;
            }else{
                return "Erreur : division par zéro";
            }
        
        case"%":
            // eviter le modulo par zéro
            if ($b !=0){
                return$a % $b;
            }else{
                return " Erreur: modulopar zéro";
                }
            default:
                return "Operation invalide";

            }

    }
 

 //Exemples d'utilisation 

 echo calcule(5, "+", 3); // affiche 8 
 echo "<br>";
 echo calcule(10, "-", 4); //affiche 6 
 echo "<br>";
 echo calcule(7, "*", 6); //affiche 42
 echo"<br>";
 echo calcule(8, "/", 2);  // Affiche 4
echo "<br>";
echo calcule(10, "%", 3); // Affiche 1
?>









