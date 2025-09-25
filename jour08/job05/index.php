<?php
session_start();

// Initialisation de la grille et du joueur si la session est vide ou si on réinitialise
if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X'; // X commence
}

// Fonction pour vérifier le gagnant
function verifier_gagnant($grille) {
    $combinaisons = [
        // Lignes
        [[0,0],[0,1],[0,2]],
        [[1,0],[1,1],[1,2]],
        [[2,0],[2,1],[2,2]],
        // Colonnes
        [[0,0],[1,0],[2,0]],
        [[0,1],[1,1],[2,1]],
        [[0,2],[1,2],[2,2]],
        // Diagonales
        [[0,0],[1,1],[2,2]],
        [[0,2],[1,1],[2,0]]
    ];

    foreach ($combinaisons as $combo) {
        $a = $grille[$combo[0][0]][$combo[0][1]];
        $b = $grille[$combo[1][0]][$combo[1][1]];
        $c = $grille[$combo[2][0]][$combo[2][1]];
        if ($a !== '-' && $a === $b && $b === $c) {
            return $a;
        }
    }
    return null;
}

// Si une case est cliquée
if (isset($_POST['case'])) {
    list($i, $j) = explode('-', $_POST['case']);
    if ($_SESSION['grille'][$i][$j] === '-') {
        $_SESSION['grille'][$i][$j] = $_SESSION['joueur'];
        // Changer de joueur
        $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
    }
}

// Vérifier le gagnant
$gagnant = verifier_gagnant($_SESSION['grille']);

// Vérifier s’il y a match nul
$match_nul = true;
foreach ($_SESSION['grille'] as $ligne) {
    if (in_array('-', $ligne)) {
        $match_nul = false;
        break;
    }
}

// Message à afficher
if ($gagnant) {
    $message = "$gagnant a gagné !";
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
} elseif ($match_nul) {
    $message = "Match nul !";
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
} else {
    $message = "Joueur {$_SESSION['joueur']} à jouer";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <style>
        table{border-collapse; margin-bottom: 10px}
        td {border:1px solid #000; width:60px; heignt:60px;text-align:center;}
        input[type=submit], button {width: 100%; height:100%; font-size:24px}
        button#reset {width: auto; height: auto; font-size: 16px; padding: 5px 10px;}
    </style>
</head>
<body>
    <h1>Morpion</h1>
    <p><?php echo $message;?></p>
    <form method="post">
        <table>
            <?php for ($i=0; $i<3; $i++):?>
                <tr>
                    <?php for ($j=0; $j<3; $j++): ?>
                            <td>
                                <button type="submit" name="case" value="<?php echo $i . "-" . $j ?>"><?= $_SESSION['grille'][$i][$j] ?></button>
                            </td> 
                        <?php endfor; ?>
                    </tr>
                <?php endfor;?>
            </table>
        <button type="submit" nam="reset" id="reset">Rénitialiser la partie</button>
    </form>
</body>
</html>
