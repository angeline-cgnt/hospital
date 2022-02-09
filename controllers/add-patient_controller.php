<?php
require_once '../models/patient.php';
require_once 'form_controller.php';


if(!empty($_POST['submit'])){
    $patientMail = new Patient;
    if($patientMail->checkMail($_POST['mail'])){
        $arrayError['mail'] = 'E-mail déjà utilisé';
    }
    
    if(empty($arrayError)){
        $lastname=htmlspecialchars(mb_strtoupper(trim($_POST['lastname'])));
        $firstname=htmlspecialchars(ucwords(trim($_POST['firstname'])));
        $birthdate=$_POST['birthdate'];
        $phone=htmlspecialchars(trim($_POST['phone']));
        $mail=htmlspecialchars(trim($_POST['mail']));
        $patient= new Patient;
        $patient->addNewPatient($lastname, $firstname, $birthdate, $phone, $mail);
    }
}
