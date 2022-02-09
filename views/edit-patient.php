<?php
require_once '../controllers/edit-patient_controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier patient</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f0a6681d69.js" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="titleList"><a href="home.php">CHU La Manu</a></h1>

    <h2>Modifier informations patient</h2>

    <?php
    if (!empty($_POST['submit'])) {
        if(empty($arrayError)){ ?>
        <p class="patientAdded">Les informations ont été mises à jour</p>
    <?php }}
    if (isset($_POST['edit'])) { ?>
        <form action="" method="POST">
            <div>
                <label for="lastname">Nom: </label>
                <input type="text" name="lastname" id="lastname" value="<?= $arrayprofil['lastname']?>">
                <span><?= $arrayError['lastname'] ?? '' ?></span>
            </div>
            <div>
                <label for="firstname">Prénom: </label>
                <input type="text" name="firstname" id="firstname" value="<?= $arrayprofil['firstname']?>">
                <span><?= $arrayError['firstname'] ?? '' ?></span>
            </div>
            <div>
                <label for="birthdate">Date de naissance: </label>
                <input type="date" name="birthdate" id="birthdate" value="<?= date('Y-m-d', strtotime($date))?>" require>
                <span><?= $arrayError['birthdate'] ?? '' ?></span>
            </div>
            <div>
                <label for="phone">Téléphone: </label>
                <input type="text" name="phone" id="phone" value="<?= $arrayprofil['phone']?>">
                <span><?= $arrayError['phone'] ?? '' ?></span>
            </div>
            <div>
                <label for="mail">Adresse mail: </label>
                <input type="text" name="mail" id="mail" value="<?= $arrayprofil['mail']?>">
                <span><?= $arrayError['mail'] ?? '' ?></span>
            </div>
            <input type="hidden" name="id" value="<?= $arrayprofil['id'] ?>">
            <input type="submit" name="submit" value="Mettre à jour">
        </form>

        <div class="listAdd">
        <a class="cancel" href="liste-patients.php">
            Annuler
        </a>
        </div>

    <?php }else{

    ?>


    <div class="listAdd">
        <a class="linkNav" href="liste-patients.php">
            Liste des patients
        </a>
    </div>
<?php } ?>


</body>

</html>