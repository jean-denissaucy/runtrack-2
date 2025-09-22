<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Pair/Impair</title>
</head>
<body>
    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Valider</botton>
</form>

<?php

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

if (is_numeric($nombre)) {
    if ($nombre % 2 == 0)  {
        echo "<p> Nombre pair</p>";
    } else { 
        
        echo "<p> Nombre impair</p>";
    }

} else {
    echo "<p>Veillez entrer un nombre Valide.</p>";

    }    
}
?>
    
</body>
</html>