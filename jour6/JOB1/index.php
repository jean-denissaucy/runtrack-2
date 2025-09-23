<?php
// Vérifier si un style est sélectionné
$style = isset($_POST['style']) ? $_POST['style'] : "style1";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire avec styles dynamiques</title>
 <link rel="stylesheet" href="style1.css">
</head>
<body>

  <form method="post" action="">
    <label for="style">Choisir un style :</label><br><br>
    <select name="style" id="style">
      <option value="style1" <?php if($style=="style1") echo "selected"; ?>>Style 1</option>
      <option value="style2" <?php if($style=="style2") echo "selected"; ?>>Style 2</option>
      <option value="style3" <?php if($style=="style3") echo "selected"; ?>>Style 3</option>
    </select><br><br>
    <input type="submit" value="Appliquer le style">
  </form>

</body>
</html>
