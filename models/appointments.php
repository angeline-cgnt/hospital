<?php
require_once 'database.php';

class Appoint extends Connection{

    public function addApointment(string $dateHour, int $id, string $details){
        $base=$this->connectDB();
        $sql="INSERT INTO `appointments` (`dateHour`, `idPatients`, `description`) VALUES
        (:dateHour, :id, :details)";
        $resultQuery=$base->prepare($sql);
        $resultQuery->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $resultQuery->bindValue(':id', $id, PDO::PARAM_INT);
        $resultQuery->bindValue(':details', $details, PDO::PARAM_STR);
        $resultQuery->execute();
    }

    public function displayAllNamePatients():array {
        $base=$this->connectDB();
        $sql="SELECT `id`, CONCAT(`lastname`, ' ', `firstname`) AS `name` FROM `patients`";
        $resultQuery=$base->query($sql);
        return $resultQuery->fetchAll();
    }

    public function displayAllAppoint(){
        $base=$this->connectDB();
        $sql="SELECT `appointments`.`id`, CONCAT(`lastname`, ' ', `firstname`) AS `name`, DATE_FORMAT(`dateHour`, '%d/%m/%Y') AS `date`, DATE_FORMAT(`dateHour`, '%H:%i') AS `hour`, `description` FROM `appointments`
        INNER JOIN `patients` ON `appointments`.`idPatients`=`patients`.`id` ORDER BY `dateHour`";
        $resultQuery=$base->query($sql);
        return $resultQuery->fetchAll();
    }

    public function displayInfosAppoint(int $idAppoint):array {
        $base=$this->connectDB();
        $sql="SELECT `appointments`.`id` AS `idAppoint`, CONCAT(`lastname`, ' ', `firstname`) AS `name`, DATE_FORMAT(`dateHour`, '%d/%m/%Y') AS `date`, DATE_FORMAT(`dateHour`, '%H:%i') AS `hour`, `description`, `phone` FROM `appointments`
        INNER JOIN `patients` ON `appointments`.`idPatients`=`patients`.`id`
        WHERE `appointments`.`id` = :idAppoint";
        $resultQuery=$base->prepare($sql);
        $resultQuery->bindValue(':idAppoint', $idAppoint, PDO::PARAM_INT);
        $resultQuery->execute();
        return $resultQuery->fetch();
    }

    public function deleteAppoint(){
        $base=$this->connectDB();
        $sql="";
        $resultQuery=$base->prepare($sql);
        
    }
}