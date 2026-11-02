<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 3</title>
</head>
<body>
    <?php
        define("TAUX_TVA", 20);
        define("DEVISE", "MAD");

        $prix_ht = 60;
        $qte = 3;

        $total_ht = $prix_ht * $qte;
        $tva = $total_ht * (TAUX_TVA / 100);
        $total_ttc = $total_ht + $tva;

        // ajout frais de livraison
        $total_ttc += 15;

        echo "total HT c " . $total_ht . " " . DEVISE . "<br>";
        echo "la TVA " . $tva . " " . DEVISE . "<br>";
        echo "total a payer (avec livraison) = " . $total_ttc . " " . DEVISE . "<br><br>";

        // verif si la constante existe
        if (defined('TAUX_TVA')) {
            echo "c bon la constante TAUX_TVA est defini.";
        }
    ?>
</body>
</html>