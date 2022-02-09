<?php
require_once '../controllers/add-appoint-controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau rendez-vous</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f0a6681d69.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="titleList"><a href="home.php">CHU La Manu</a></h1>
    <h2>Nouveau rendez-vous</h2>

    <form action="" method="POST">
        <div>
            <label for="lastname">Nom: </label>
            <select name="lastname" id="lastname">
                <?php
                foreach($arrayPatients as $patient){
                ?>
                <option value=<?= $patient['id'] ?>><?= $patient['lastname'] ?></option>
                <?php } ?>
            </select>
            <span></span>
        </div>
        <!-- <div>
            <label for="firstname">Prénom: </label>
            <input type="text" name="firstname" id="firstname" value="">
            <span></span>
        </div> -->
        <div>
            <label for="date">Date: </label>
            <input type="date" name="date" id="date" value="<?= $_POST['date'] ?? "" ?>" require>
            <span><?= $arrayError['date'] ?? '' ?></span>
        </div>
        
        <div>
            <label for="hour">Heure: </label>
            <select name="hour" id="hour">
                <?php
                for($i=9; $i<=19; $i++){
                ?>
                <option value="<?= $i .':00:00' ?>"><?= $i .":00" ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="détails">Commentaires (facultatif): </label>
            <textarea name="details" id="details" cols="35" rows="3"></textarea>
            <span></span>
        </div>
        <input type="submit" name="add" value="Ajouter">
    </form>

    <div class="listAdd">
        <a class="cancel" href="list-appoint.php">Annuler</a>
    </div>


</body>

</html>