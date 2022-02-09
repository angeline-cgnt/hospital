<?php
require_once '../models/patient.php';

if(isset($_POST['profile'])){
    $id=$_POST['profile'];
    $profileObj = new Patient;
    $arrayprofil = $profileObj->displayProfilePatient($id);
}
