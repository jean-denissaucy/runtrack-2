<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method ="POST" action="">
        <label for="username">nom d'utilisateur :</label>
        <input type="text" name="username"id="username"><br><br>

        <label for="password">mot de passe :</label>
        <input type="text" name="password" id="password"><br><br>

        <input type="submit" value="Se connecter">
</form>

        <?php

        //Vérifier si le formulaire a été soumis
        if (isset($_POST['username'])&& isset($_POST['password'])) {
            $username =$_POST["username"];
            $password =$_POST["password"];
        
        //Vérification des identifiants 
        if ($username=="John" && $password=="Rambo") {
            echo "C'est pas ma guerre";
        } else{ 
        echo "Votre pire cauchemar";
        }
    }
    ?>



    
</body>
</html>