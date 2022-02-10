<?php
require_once '../models/patient.php';
require_once '../models/appointments.php';

$appointObj = new Appoint;
$arrayPatients = $appointObj->displayAllNamePatients();

$arrayError=[];

if(!empty($_POST['add'])){
    if(empty($_POST['date'])){
        $arrayError['date'] = 'Veuillez saisir une date';
    }
    if(empty($_POST['lastname'])){
        $arrayError['lastname'] = 'Veuillez choisir un patient';
    }
    if(empty($_POST['hour'])){
        $arrayError['hour'] = 'Veuillez saisir une heure';
    }

    if(empty($arrayError)){
    $lastname=$_POST['lastname'];
    $dateHour=$_POST['date'] ." ". $_POST['hour'] .":00";
    $details=htmlspecialchars(trim($_POST['details']));
    $appoint=new Appoint;
    $appoint->addApointment($dateHour, $lastname, $details);
    }
}