<form method="post">
    <label>Texte :</label>
    <input type="text" name="str" required>
    <br><br>

    <label>Transformation :</label>
    <select name="fonction" required>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <br><br>

    <button type="submit">Valider</button>
</form>

<?php
if (isset($_POST["str"]) && isset ($_POST["fonction"])){ 
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    //determiner la longueur de la chaîne (templace strlen)
    $longueur = 0;
    while (isset($str[$longeur])) {
        $longueur++;
    }

    //séparer les mots manuellement
    $mots=[];
    $indexMot = 0;
    $mots[$indexMot]="";
    for ($i=0; $i <$longueur; $i++){
        if ($str[$i] !==""){
            $mots[$indexMot] .= $str[$i];
    }else{
        $indexMot++;
        $mots[$indexMot] ="";
        }
    }
    $nbMots= $indexMot +1;

    echo "<p><b>Résultat : </b>";
    
    //----Option Gras ----
    if ($fonction==="gras"){
        for ( $i=0; $i <$nbMots; $i++){
            $premiere = $mots [$i] [0];
            if ($premiere>='A' && $premiere <= 'Z') {
                echo "<b>". $mots[$i] . "</b>";
            }else{
                echo $mots[$i];
            }
            echo"";
        }
    }

    //----Option Cesar----
    elseif ( $fonction==="cesar") {
        $decalage =2;
        for ($i = 0; $i <longueur;$i++){
            $c = $str[$i];

            //Lettre majuscule
            if ($c>='A'&& $c<='Z'){
                $pos = 0;
                $tmp = 'A';
                while ( $tmp!== $c) {
                    $tmp++;
                    if ($tmp>'Z') {$tmp= 'A';}
                    $pos++;
                }
                $pos = ($po + $decalage) %26;
                $nouveau ='a';
                for ($j = 0;$j<$pos;$j++) {
                    $nouveau++;
                    if ($nouveau>'z') {$nouveau='a';}
                }
                echo $nouveau;
            }
          //Sinon on garde tel quel
          else{
            echo $c;
           }
        }
    }

    //----Option Plateforme----
    elseif ($fonction === "plateform") {
        for( $i = 0; $i< $nbMots; $i++){

    //trouver Longueur du mot
        $lenMot = 0;
        while (isset($mots[$i] [$lenMot])) {
            $lenMot++;
        }
        if ($lentMot>=2 && $mots[$i] [$lentMot-2] === 'm' && $mots[$i] [lentMot-1]==='e'){
           echo $mots[$i]. "_";
            }else{
        
            }
        }
    }
        echo"</p>";
}