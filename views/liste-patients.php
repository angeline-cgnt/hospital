<?php
require_once '../controllers/liste-patients_controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des patients</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="titleList">Hôpital La Manu</h1>
    <h2>Liste des patients</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Tél.</th>
                <th>Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($arrayPatient as $patient) {
            ?>
                <tr>
                    <td><?= $patient['lastname'] ?></td>
                    <td><?= $patient['firstname'] ?></td>
                    <td><?= $patient['birthdate'] ?></td>
                    <td><?= $patient['phone'] ?></td>
                    <td><?= $patient['mail'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="ajout-patient.php">Ajouter un patient</a>

    <a href="home.php">Retour</a>



</body>

</html>