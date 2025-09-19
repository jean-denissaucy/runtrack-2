<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #c30808ff;
        }
    </style>
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
        if (!empty($_GET)) {
            echo "<h3>Tableau des arguments GET :</h3>";
            echo "<table>";
            echo "<tr><th>Argument</th><th>Valeur</th></tr>";

            foreach ($_GET as $cle => $valeur) {
                echo "<tr>";
                echo "<td>" .$cle. "</td>";
                echo "<td>" .$valeur. "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    ?>
</body>
</html>
