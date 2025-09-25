<?php
$cookie_duration = time() + 3600;

// Déconnexion
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600);
    unset($_COOKIE['prenom']);
}

// Connexion
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = trim($_POST['prenom']);
    setcookie("prenom", $prenom, $cookie_duration);
    $_COOKIE['prenom'] = $prenom; // dispo immédiatement
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion avec Cookie</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])): ?>
        <h1>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <h1>Connexion</h1>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>