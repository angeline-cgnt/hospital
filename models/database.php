<?php
require_once '../config.php'; 

class Connection{
    private string $_dbname= DBNAME;
    private string $_user= DBUSER;
    private string $_password= DBPASSWORD;

    protected function connectDB()
    {
        try {
            $database = new PDO('mysql:host=localhost;dbname='. $this->_dbname .';charset=utf8', $this->_user, $this->_password);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $database;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}