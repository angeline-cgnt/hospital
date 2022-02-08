<?php

require_once '../models/patient.php';

$patientObj = new Patient;
$arrayPatient = $patientObj->displayPatients();


if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $deleteObj = new Patient;
    $deleteObj->deletePatient($id);
    header('Location: liste-patients.php');
}


