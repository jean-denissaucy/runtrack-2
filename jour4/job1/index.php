<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter les arguments GET</title>
</head>
<body>
    <h2>Formulaire GET</h2>
    <form method="get" action="">
        <label>Nom :</label>
        <input type="text" name="nom"><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom"><br><br>

        <label>Âge :</label>
        <input type="text" name="age"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
        // Vérifie si des données GET ont été envoyées
        if (!empty($_GET)) {
            // Compter le nombre d'arguments
            $nombre_arguments = count($_GET);
            echo "Le nombre d'arguments GET envoyés est : " . $nombre_arguments . "<br>";

            // Afficher chaque argument et sa valeur
            echo "<ul>";
            foreach ($_GET as $cle => $valeur) {
                echo "<li>" .$cle . " = " .$valeur. "</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>

