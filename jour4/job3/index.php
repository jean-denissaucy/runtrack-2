<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test $_POST</title>
</head>
<body>
    <H2>formulaire</H2>
    <form method="post">
        <label>Nom :</label>
        <input type="text" name="nom"><br><br>

        <label>Email : </label>
        <imput type="text" name="email"><br><br>

        <imput>type="submit" value="Envoyer">
</form>

<?php
//vérifiersi le formulaire est soumis
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //compter les argument envoyés
    $nb_argument = count($_POST);
      echo "Nombre d'arguments envoyés en POST : " . $nb_arguments . "<br><br>";
    //Afficher chaque champ reçu
    foreach ($_POST as $cle => $valeur) {
        echo $cle . " : " . $valeur . "<br>";
    }

}
?>
</body>
</html>
