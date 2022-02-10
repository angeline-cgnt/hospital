<?php
require_once '../controllers/infos-appoint_controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos rendez-vous</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f0a6681d69.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="titleList"><a href="home.php">CHU La Manu</a></h1>
    <h2>Infos rendez-vous</h2>

    <?php
    if (isset($_POST['infos'])) {
    ?>
        <div class="detailsProfile">
            <p>Patient(e): <?= $arrayInfos['name'] ?></p>
            <p>N° de téléphone: <?= wordwrap($arrayInfos['phone'], 2, " ", true) ?></p>
            <p>RDV: <?= $arrayInfos['date'] ?> à <?= $arrayInfos['hour'] ?></p>
            <p>Détails: <?= $arrayInfos['description'] ?></p>
            <form action="" method="POST">
                <button name="edit" value="<?= $arrayInfos['idAppoint'] ?>" type="submit"><i class="fas fa-user-edit"></i> Modifier</button>
            </form>
        </div>


    <?php } ?>


    <div class="listAdd">
        <a class="linkNav" href="list-appoint.php">Retour</a>
    </div>


</body>

</html>