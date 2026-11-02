<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 7</title>
</head>
<body>
    
    <div>
        <h3>table de multiplication</h3>
        <?php
            $nombre = 7;
            for ($i = 1; $i <= 10; $i++) {
                $res = $nombre * $i;
                echo $nombre . " x " . $i . " = " . $res . "<br>";
            }
        ?>
    </div>

    <hr> <!-- juste pour separer les deux parties -->

    <div>
        <h3>la pyramide detoiles</h3>
        <?php
            for ($ligne = 1; $ligne <= 6; $ligne++) {
                // deuxieme boucle pour afficher les etoiles sur la meme ligne
                for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                    echo "*";
                }
                // on saute une ligne a la fin de chaque etage
                echo "<br>";
            }
        ?>
    </div>

</body>
</html>