<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Notes</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 15px; }
        th, td { border: 1px solid black; padding: 6px 12px; text-align: left; }
    </style>
</head>
<body>

    <h2>Liste des etudiants et notes</h2>

    <?php
    // data de l'enonce
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    // var pr les calculs
    $somme = 0;
    $nb_valide = 0;
    $meilleure_note = -1;
    $majordome = ""; // etudiant avec la max note

    // parcours du tab pour calculs et recherche de la meilleur note
    foreach ($notes as $nom => $note) {
        $somme += $note;

        if ($note >= 10) {
            $nb_valide++;
        }

        if ($note > $meilleure_note) {
            $meilleure_note = $note;
            $majordome = $nom;
        }
    }

    $moyenne = $somme / count($notes);
    ?>

    <!-- tableau html avec foreach -->
    <table>
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Statut</th>
        </tr>
        <?php foreach ($notes as $nom => $note): ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <td>
                    <?php 
                    // seuil de validation = 10
                    if ($note >= 10) {
                        echo "Validé";
                    } else {
                        echo "Non validé";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Resultats de la classe :</h3>
    <ul>
        <li><strong>Somme des notes :</strong> <?= $somme ?></li>
        <li><strong>Moyenne de la classe :</strong> <?= $moyenne ?> / 20</li>
        <li><strong>Nombre d'etudiants ayant validé :</strong> <?= $nb_valide ?></li>
        <li><strong>Meilleure note :</strong> <?= $majordome ?> avec <?= $meilleure_note ?> / 20</li>
    </ul>

</body>
</html>