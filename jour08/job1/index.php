<?php
session_start();//on démarre la session

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] =1;
}

if (isset($_POST['reset'])){
    $_SESSION['nbvisites'] = 1;
}else{

    $_SESSION['nbvisites']++;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Compteur de visites</title>
</head>
<body>
    <h1>Nombre de vissites : <?php echo $_SESSION ['nbvisites'];?></h1>
    
    <form method="post">
        <button type="submit" name="reset">Reset</button>
</form> 
<?php
echo'<pre>';
    print_r($_POST);
    print_r($_SESSION);
    echo'</pre>';
    ?>
</body>
</html>

