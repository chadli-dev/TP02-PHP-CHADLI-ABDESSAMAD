<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>

<?php
/*
 * REPONSE QUESTION GET (Partie A - 4) :
 * Les donnees envoyees avec GET apparaissent directement dans l'URL du navigateur,
 * juste apres le nom du fichier et un "?" sous forme de parametres separes par "&"
 * Exemple : ex10_get.php?nom=Alami&prenom=Ali&groupe=G2
 * C'est donc visible en clair dans l'historique et la barre d'adresse.
 */

// 1. Verif si on a ouvert la page directement sans soumettre le formulaire
if (!isset($_GET['nom']) && !isset($_GET['prenom']) && !isset($_GET['groupe'])) {
    echo "<p style='color:orange;'>Aucune donnee reçue. Veuillez d'abord remplir le formulaire <a href='ex10_get.html'>ici</a>.</p>";
} else {
    // recup des valeurs avec trim pr eviter les simples espaces vides
    $nom = isset($_GET['nom']) ? trim($_GET['nom']) : "";
    $prenom = isset($_GET['prenom']) ? trim($_GET['prenom']) : "";
    $groupe = isset($_GET['groupe']) ? trim($_GET['groupe']) : "";

    // 2. Refuser si un des champs est vide
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p style='color:red;'>Erreur : Tous les champs sont obligatoires, merci de completer tout le form !</p>";
        echo "<p><a href='ex10_get.html'>Retourner au formulaire</a></p>";
    } else {
        // 3. Securiser l'affichage contre les failles XSS avec htmlspecialchars
        $nom_propre = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom_propre = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe_propre = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "<h2>Bienvenue $prenom_propre $nom_propre !</h2>";
        echo "<p>Vous etes bien inscrit(e) dans le groupe <strong>$groupe_propre</strong>.</p>";
    }
}
?>

</body>
</html>