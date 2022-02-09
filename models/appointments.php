<?php
require_once 'database.php';

class Appoint extends Connection{

    public function addApointment(string $dateHour, int $id, $details){
        $base=$this->connectDB();
        $sql="INSERT INTO `appointments` (`dateHour`, `idPatients`, `description`) VALUES
        (:dateHour, :id, :details)";
        $resultQuery=$base->prepare($sql);
    }
}