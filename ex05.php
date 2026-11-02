<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 5</title>
</head>
<body>
    <?php
        $moyenne = 14; // on change juste ce chiffre pr faire les tests
        
        if ($moyenne < 0 || $moyenne > 20) {
            echo "Note invalide";
        } else {
            if ($moyenne < 10) {
                echo "Non validé";
            } elseif ($moyenne < 12) {
                echo "Passable";
            } elseif ($moyenne < 14) {
                echo "Assez bien";
            } elseif ($moyenne < 16) {
                echo "Bien";
            } else {
                echo "Très bien";
            }
        }

        /*
        resultats des tests demandés :
        -1 -> Note invalide
        9 -> Non validé
        10 -> Passable
        12 -> Assez bien
        14 -> Bien
        16 -> Très bien
        21 -> Note invalide
        */
    ?>
</body>
</html>