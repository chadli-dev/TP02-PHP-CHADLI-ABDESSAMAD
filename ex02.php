<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 2</title>
</head>
<body>
    <?php
        $nom = "bennani";
        $prenom = "yassine";
        $age = 20;
        $formation = "dev web";

        $txt = "Salut je ss " . $prenom . " " . $nom . " jai " . $age . " ans et je fais " . $formation;
        $txt .= " et J'apprends PHP.";
        
        echo $txt . "<br><br>";

        $note = 12;
        $Note = 16;
        
        echo "premiere note c " . $note . " et la dexieme c " . $Note . "<br>";

        /* 
        pourqoui $note et $Note sont diff: pck php est sensible a la casse (maj pas comme min)
        les noms valides ds la liste c: $a, $_a, $a_a, $AAA, $a1
        les autres non ($a! a un ! et $1a commence par un chiffre c interdit)
        */
    ?>
</body>
</html>