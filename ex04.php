<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo 4</title>
</head>
<body>
    <?php
        $v1 = 42;
        $v2 = "42";
        $v3 = 15.8;
        $v4 = true;
        $v5 = false;
        $v6 = null;

        echo "<pre>";
        var_dump($v1, $v2, $v3, $v4, $v5, $v6);
        
        echo "<br>--- conversions ---<br>";
        $c1 = (int)$v2;
        $c2 = (int)$v3;
        $c3 = (string)$v1;
        var_dump($c1, $c2, $c3);
        echo "</pre>";

        echo "true avec echo : " . $v4 . "<br>";
        echo "false avec echo : " . $v5 . "<br>"; 
        
        echo "<pre>";
        var_dump($v4, $v5);
        
        echo "<br>--- conv en bool ---<br>";
        var_dump((bool)0, (bool)"0", (bool)"PHP", (bool)[]);
        echo "</pre>";

        /*
        reponse: 
        la diff entre echo et var_dump pr false c que echo affiche rien du tout a l ecran
        alors que var_dump affiche bien la valeur bool(false), dc c plus pratique pr verifier
        */
    ?>
</body>
</html>