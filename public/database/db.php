<?php
    // include_once 'constants.php'; 

    class Database{

        private $dsn = "mysql:host=localhost;dbname=ims";
        private $dbuser = "root";
        private $dbpass = "Data@2020";
        private $conn;

        public function __construct(){

                try{
                    $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
    
                }catch (PDOException $e){
                    echo 'Error : ' . $e->getMessage();
                }
    
                return $this->conn;
        }
    }

    // $db = new Database();

?>