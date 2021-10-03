<?php
    include_once 'constants.php'; 

    class Database{

        private $dsn = DB_HOST;
        private $dbuser = DB_USER;
        private $dbpass = DB_PASS;
        protected $conn;

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