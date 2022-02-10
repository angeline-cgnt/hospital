<?php
require_once '../models/appointments.php';

if(isset($_POST['infos'])){
    $id=$_POST['infos'];
    $infosObj = new Appoint;
    $arrayInfos = $infosObj->displayInfosAppoint($id);
}