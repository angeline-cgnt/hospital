<?php
require_once '../controllers/profil-patient_controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil patient</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f0a6681d69.js" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="titleList"><a href="home.php">CHU La Manu</a></h1>

    <h2>Profil patient</h2>

    <?php
    if (isset($_POST['profile'])) {
    ?>
        <div class="detailsProfile">
            <p>Nom: <?= $arrayprofil['lastname'] ?></p>
            <p>Prénom: <?= $arrayprofil['firstname'] ?></p>
            <p>Date de naissance: <?= $arrayprofil['birthdate'] ?></p>
            <p>N° de téléphone: <?= wordwrap($arrayprofil['phone'], 2, " ", true) ?></p>
            <p>E-mail: <?= $arrayprofil['mail'] ?></p>
            <form action="edit-patient.php" method="POST">
                <button name="edit" value="<?= $arrayprofil['id'] ?>" type="submit"><i class="fas fa-user-edit"></i> Modifier</button>
            </form>
        </div>


    <?php } ?>


    <div class="listAdd">
        <a class="linkNav" href="liste-patients.php">
            Liste patients
        </a>
    </div>



</body>

</html>