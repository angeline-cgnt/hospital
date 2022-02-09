<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des rendez-vous</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f0a6681d69.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="titleList"><a href="home.php">CHU La Manu</a></h1>
    <h2>Liste des rendez-vous</h2>

    <div class="scroll">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de rendez-vous</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="buttonInfos">
                            <form action="" method="POST">
                                <button class="infos" name="" value="" type="submit"><i class="fas fa-info"></i> Infos</button>
                            </form>
                        </td>
                        <td><a class="linkDelete" href="list-appoint.php?delete=" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?')" ;><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                
            </tbody>
        </table>
    </div>


    <div class="listAdd">
        <a class="linkNav" href="add-appoint.php">Ajouter un rendez-vous</a>
        <a class="linkNav" href="home.php">Retour accueil</a>
    </div>


</body>

</html>