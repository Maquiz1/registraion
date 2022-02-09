<?php
    include_once 'config.php'; 

    class Database{

        public $conn;

        public function __construct(){

                try{
                    $this->conn = new PDO(DB_HOST,DB_USER,DB_PASS);
                    // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                }catch (PDOException $e){
                    echo 'Error : ' . $e->getMessage();
                }
    
                return $this->conn;
        }
    }

?>