<?php
$_COOKIE_duration= time() +3600;

if (isset($_POST['reset'])) {
    setcookie("nbvisites", 0, $_COOKIE_duration);
    $nbvisites=0;
    }else{

if (isset($_COOKIE['nbvisites'])) {
    $nbvosite = $_COOKIE['nbvosites'] +1;

}else{

    $nbvisites = 1;
    }
setcookie("nbvisites", $nbvisites,$_COOKIE_duration);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur avec Cookie</title>
</head>
<body>
<h1>Nombre de visistes : <?php echo $nbvisites; ?></h1>

<form method="post">
    <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>