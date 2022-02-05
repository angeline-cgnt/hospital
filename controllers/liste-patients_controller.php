<?php

require_once '../models/patient.php';

$patientObj = new Patient;
$arrayPatient = $patientObj->displayPatients();