<?php
require_once '../models/patient.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $profileObj = new Patient;
    $arrayprofil = $profileObj->displayProfilePatient($id);
}
