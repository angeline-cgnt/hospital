<?php
require_once 'database.php';

class Patient extends Connection{

    public function addNewPatient(string $lastname, string $firstname, $birthdate, string $phoneNumber, string $mail){
        $base=$this->connectDB();
        $sql='INSERT INTO `patients`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES 
        (:lastname, :firstname, :birthdate, :phoneNumber, :mail)';
        $resultQuery = $base->prepare($sql);
        $resultQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $resultQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $resultQuery->bindValue(':birthdate', $birthdate);
        $resultQuery->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $resultQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
        $resultQuery->execute();
    }

    public function displayPatients():array {
        $base=$this->connectDB();
        $sql='SELECT * FROM `patients`';
        $resultQuery=$base->query($sql);
        return $resultQuery->fetchAll();
    }

}