<?php
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . "/www/azi.note/");

class DB
{
    public $conn;
    public function getDbInstance() {
        try {
            // подключаемся к серверу
            $this->conn = new PDO("mysql:host=localhost;port=3308;dbname=register", "root", "");
            return $conn;
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function closeDbInstance() {
        $this->conn = null;  // отключаемся от сервера базы данных
    } 
}