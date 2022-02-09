<?php
require_once '../models/patient.php';
require_once '../models/appointments.php';

$appointObj = new Patient;
$arrayPatients = $appointObj->displayPatients();

$arrayError=[];

if(!empty($_POST['add'])){
    if(empty($_POST['date'])){
        $arrayError['date'] = 'Veuillez saisir une date';
    }

    if(empty($arrayError)){
    $lastname=$_POST['lastname'];
    $date=$_POST['date'];
    $date=$_POST['hour'];
    $details=htmlspecialchars(trim($_POST['details']));
    var_dump($_POST);
    }
}