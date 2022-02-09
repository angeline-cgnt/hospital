<?php
require_once 'form_controller.php';
require_once '../models/patient.php';



if(isset($_POST['edit'])){
    $id=$_POST['edit'];
    $profileObj = new Patient;
    $arrayprofil = $profileObj->displayProfilePatient($id);
    $date = str_replace('/', '-', $arrayprofil['birthdate']);
}

if(!empty($_POST['submit'])){    
    if(empty($arrayError)){
        $id=$_POST['id'];
        $lastname=htmlspecialchars(mb_strtoupper(trim($_POST['lastname'])));
        $firstname=htmlspecialchars(ucwords(trim($_POST['firstname'])));
        $birthdate=$_POST['birthdate'];
        $phone=htmlspecialchars(trim($_POST['phone']));
        $mail=htmlspecialchars(trim($_POST['mail']));
        $patient= new Patient;
        $patient->updatePatient($lastname, $firstname, $birthdate, $phone, $mail, $id);
    }
}
