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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f0a6681d69.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="titleList"><a href="home.php">CHU La Manu</a></h1>
    <h2>Liste des patients</h2>

    <div class="scroll">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Tél.</th>
                    <th>Mail</th>
                    <th></th>
                    <th></th>
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
                        <td><?= wordwrap($patient['phone'], 2, " ", true) ?></td>
                        <td><?= $patient['mail'] ?></td>
                        <td class="buttonInfos">
                            <form action="profil-patient.php" method="POST">
                                <button class="infos" name="profile" value=<?= $patient['id'] ?> type="submit"><i class="fas fa-info"></i> Infos</button>
                            </form>
                        </td>
                        <td><a class="linkDelete" href="liste-patients.php?delete=<?= $patient['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" ;><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <div class="listAdd">
        <a class="linkNav" href="add-patient.php">Ajouter un patient</a>
        <a class="linkNav" href="home.php">Retour accueil</a>
    </div>


</body>

</html>