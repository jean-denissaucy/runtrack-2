<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage POST en tableau</title>
    <style>
        table{ border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
        
</head>
<body>
    <h2>Formulaire POST</h2>
    <form method="post">
        <label>Nom :</label>
        <input type="text" name="nom"><br><br>

        <label>Prénom :</label>
        <inpur type="test" name="email"><br><br>

        <input type="submit" value="Envoyer">

        <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            echo "<h3> Tableau des données envoyées :</h3>";
        echo "<table>";
        echo"<tr><ARGUMENT</th><th>valeur</th></tr>";
     foreach ($_POST as $argument => $valeur) {
            echo "<tr>";
        echo "<td>" . $argument . "</td>";
        echo "<td>" . $valeur . "</td>";
        echo "</tr>";
}
echo "</table>"; 
}
?>
</body>
</html>