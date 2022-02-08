<?php
require_once 'database.php';

class Patient extends Connection{

    /**
     * fonction permettant d'ajouter un patient
     * 
     * @param string $lastame: nom du patient
     * @param string $firstname: prénom du patient
     * @param string $birthdate: date de naissance du patient
     * @param string $phoneNumber: n° de tél. du patient
     * @param string $mail: adresse mail du patient
     * 
     * @return void
     */
    public function addNewPatient(string $lastname, string $firstname, $birthdate, string $phoneNumber, string $mail):void {
        $base=$this->connectDB();
        $sql='INSERT INTO `patients`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES 
        (:lastname, :firstname, :birthdate, :phoneNumber, :mail)';
        $resultQuery = $base->prepare($sql);
        $resultQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $resultQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $resultQuery->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $resultQuery->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $resultQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
        $resultQuery->execute();
    }

    public function checkMail(string $mail):bool {
        $base=$this->connectDB();
        $sql="SELECT `mail` FROM `patients` WHERE `mail`=:mail";
        $resultQuery=$base->prepare($sql);
        $resultQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
        $resultQuery->execute();
        $result=$resultQuery->fetchAll();

        if(count($result) == 1){
            return true;
        }else{
            return false;
        }
    }

    public function displayPatients():array {
        $base=$this->connectDB();
        $sql="SELECT `id`, `lastname`, `firstname`, DATE_FORMAT(`birthdate`, '%d/%m/%Y') AS birthdate, `phone`, `mail` FROM `patients`";
        $resultQuery=$base->query($sql);
        return $resultQuery->fetchAll();
    }

    public function displayProfilePatient(int $id):array {
        $base=$this->connectDB();
        $sql="SELECT `id`, `lastname`, `firstname`, DATE_FORMAT(`birthdate`, '%d/%m/%Y') AS birthdate, `phone`, `mail` FROM `patients` WHERE `id`=:id";
        $resultQuery=$base->prepare($sql);
        $resultQuery->bindValue(':id', $id, PDO::PARAM_INT);
        $resultQuery->execute();
        return $resultQuery->fetch();
    }

    public function deletePatient(int $id):void {
        $base=$this->connectDB();
        $sql="DELETE FROM `patients` WHERE `id`= :id";
        $resultQuery=$base->prepare($sql);
        $resultQuery->bindValue(':id', $id, PDO::PARAM_INT);
        $resultQuery->execute();
    }

    public function updatePatient(string $lastname, string $firstname, $birthdate, string $phoneNumber, string $mail, int $id):void {
        $base=$this->connectDB();
        $sql="UPDATE `patients`
        SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `phone` = :phoneNumber, `mail` = :mail
        WHERE `id`= :id";
        $resultQuery=$base->prepare($sql);
        $resultQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $resultQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $resultQuery->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $resultQuery->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $resultQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
        $resultQuery->bindValue(':id', $id, PDO::PARAM_INT);
        $resultQuery->execute();
    }

}