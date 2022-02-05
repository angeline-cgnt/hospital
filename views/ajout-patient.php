<?php
require_once '../controllers/ajout-patient_controller.php';
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
    <h1>Hôpital La Manu</h1>
    <h2>Nouveau patient</h2>

    <?php if (!empty($_POST['add']) && empty($arrayError)) { ?>
        <p>Le patient a été ajouté</p>
    <?php } else { ?>

        <form action="" method="POST">
            <div>
                <label for="lastname">Nom: </label>
                <input type="text" name="lastname" id="lastname" value="<?= $_POST['lastname'] ?? '' ?>">
                <span><?= $arrayError['lastname'] ?? '' ?></span>
            </div>
            <div>
                <label for="firstname">Prénom: </label>
                <input type="text" name="firstname" id="firstname" value="<?= $_POST['firstname'] ?? '' ?>">
                <span><?= $arrayError['firstname'] ?? '' ?></span>
            </div>
            <div>
                <label for="birthdate">Date de naissance: </label>
                <input type="date" name="birthdate" id="birthdate" value="<?= $_POST['birthdate'] ?? '' ?>" require>
                <span><?= $arrayError['birtdate'] ?? '' ?></span>
            </div>
            <div>
                <label for="phone">Téléphone: </label>
                <input type="text" name="phone" id="phone" value="<?= $_POST['phone'] ?? '' ?>">
                <span><?= $arrayError['phone'] ?? '' ?></span>
            </div>
            <div>
                <label for="mail">Adresse mail: </label>
                <input type="text" name="mail" id="mail" value="<?= $_POST['mail'] ?? '' ?>">
                <span><?= $arrayError['mail'] ?? '' ?></span>
            </div>
            <input type="submit" name="add" value="Ajouter">
        </form>

    <?php } ?>

    <a href="liste-patients.php">Liste des patients</a>

    <a href="home.php">Retour accueil</a>



</body>

</html>