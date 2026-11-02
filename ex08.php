<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 8</title>
</head>
<body>
    
    <h3>partie 1 : while (nombres pairs)</h3>
    <?php
        $i = 0;
        while ($i <= 20) {
            if ($i == 10) {
                echo "<b>" . $i . "</b> "; // on met juste le 10 en gras
            } else {
                echo $i . " ";
            }
            $i += 2; // on avance de 2 pr avoir que les pairs
        }
    ?>

    <h3>partie 2 : while vs do-while</h3>
    <?php
        $cpt = 5;
        $tour_while = 0;
        
        while ($cpt < 5) {
            $tour_while++;
            $cpt++;
        }
        echo "la boucle while a tourne " . $tour_while . " fois<br>";

        // on remet a 5 pr tester lautre
        $cpt = 5;
        $tour_do = 0;
        
        do {
            $tour_do++;
            $cpt++;
        } while ($cpt < 5);
        
        echo "la boucle do-while a tourne " . $tour_do . " fois<br>";
    ?>

    <h3>partie 3 : continue et break</h3>
    <?php
        for ($k = 1; $k <= 20; $k++) {
            if ($k == 16) {
                break; // stop tt avant de print 16
            }
            if ($k % 3 == 0) {
                continue; // on zappe les multiples de 3
            }
            echo $k . " ";
        }
    ?>

</body>
</html>