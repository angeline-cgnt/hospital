<?php
require_once '../models/appointments.php';

$appointObj = new Appoint;
$arrayAppoint = $appointObj->displayAllAppoint();