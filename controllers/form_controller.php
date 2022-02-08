<?php
$arrayError = [];

$regexName = "/^[a-zA-ZàáâäãčćèéêëėìíîïńòóôöõùúûüūÿýźñçÀÁÂÄÃĆČĖÈÉÊËÌÍÎÏŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŹÑÇŒÆ ,.'-]{2,25}$/u";
$regexPhone = "/^[0-9]{10}$/";

if(!empty($_POST['submit'])){
    if(empty($_POST['lastname'])){
        $arrayError['lastname'] = 'Veuillez renseigner ce champs';
    } else if(!preg_match($regexName, $_POST['lastname'])){
        $arrayError['lastname'] = 'Format invalide';
    }
    if(empty($_POST['firstname'])){
        $arrayError['firstname'] = 'Veuillez renseigner ce champs';
    } else if(!preg_match($regexName, $_POST['firstname'])){
        $arrayError['firstname'] = 'Format invalide';
    }
    if(empty($_POST['phone'])){
        $arrayError['phone'] = 'Veuillez renseigner ce champs';
    } else if(!preg_match($regexPhone, $_POST['phone'])){
        $arrayError['phone'] = 'Format invalide';
    }

    $patientMail = new Patient;
    if(empty($_POST['mail'])){
        $arrayError['mail'] = 'Veuillez renseigner ce champs';
    } else if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        $arrayError['mail'] = 'Format invalide';
    } else if($patientMail->checkMail($_POST['mail'])){
        $arrayError['mail'] = 'E-mail déjà utilisé';
    }
}