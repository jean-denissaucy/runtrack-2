<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison ASCII</title>
</head>
<body>
<form method="post">
    <label>Largeur : <input type="text" name="largeur"></label><br>
    <label>Hauteur : <input type="text" name="hauteur"></label><br>
    <input type="submit" value="Construire">
</form>

<pre>
<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);

    // Toit (triangle)
    for ($i = 0; $i < $hauteur; $i++) {
        echo str_repeat(" ", $hauteur - $i);
        echo "/" . str_repeat("_", $i * 2) . "\\\n";
    }

    // Murs
    for ($j = 0; $j < $hauteur; $j++) {
        echo "|" . str_repeat(" ", $largeur) . "|\n";
    }

    // Base
    echo "|" . str_repeat("_", $largeur) . "|\n";
}
?>
</pre>
</body>
</html>
