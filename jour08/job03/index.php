<?php
session_start();

if (!isset($_SESSION['prenoms'])){
    $_SESSION['prenoms'] = [];
}

if(isset($_POST['prenom'])&& !empty(trim($_POST['prenom']))) {
    $prenom = trim($_POST['prenom']);
    $_SESSION['prenom'][]=$prenom;
}

if (isset($_POST['reset'])) {
    $_SESSION['prenom'] =[];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prenoms</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    <form method="post">
        <input type="text" name="jean-denis" placeholder="Entrez un prénom">
        <button type= "submit">Ajouter</button>
</form>
<h2>Liste des prénoms:</h2>
<ul>
    <?php foreach ($_SESSION['prenoms'] as $p): ?>
        <li><?php echo htmlspecialchars($p); ?></li>
    <?php endforeach; ?>
</lu>
</body>
</html>