<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>

<?php
/*
 * REPONSE QUESTION POST (Partie B - 4) :
 * Comparaison URL avec GET : 
 * Dans la methode POST, les donnees ne sont PAS visibles dans l'URL. L'URL reste simplement "ex10_post.php".
 * Les infos passent dans le corps de la requete HTTP. C'est plus discret et adapte aux formulaires
 * longs ou avec des infos sensibles comme les mots de passe.
 */

// 1. Verif si acces direct sans submit
if (!isset($_POST['nom']) && !isset($_POST['prenom']) && !isset($_POST['groupe'])) {
    echo "<p style='color:orange;'>Acces direct detecte. Merci de passer par le formulaire <a href='ex10_post.html'>ex10_post.html</a>.</p>";
} else {
    // nettoyage des espaces
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : "";
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : "";
    $groupe = isset($_POST['groupe']) ? trim($_POST['groupe']) : "";

    // 2. Verif des champs vides
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p style='color:red;'>Erreur : Veuillez renseigner tous les champs svp.</p>";
        echo "<p><a href='ex10_post.html'>Retourner au formulaire</a></p>";
    } else {
        // 3. Echappement html
        $nom_propre = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom_propre = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe_propre = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "<h2>Bienvenue $prenom_propre $nom_propre !</h2>";
        echo "<p>Vous etes bien enregistre(e) dans le groupe <strong>$groupe_propre</strong> (methode POST).</p>";
    }
}
?>

</body>
</html>