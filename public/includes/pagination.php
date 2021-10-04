<?php
    include_once '../database/constants.php'; 

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


        public function pagination($table,$pno,$n){
            // $totalRecords = 100000;
            $query = $this->conn->query("SELECT * FROM $table");
            $num = $query->rowCount();

            $pageno = $pno;
            $numberOfRecordsPerPage = $n;

            // $totalPage = ceil($totalRecords/$numberOfRecordsPerPage);
            $totalPage = ceil($num/$numberOfRecordsPerPage);
            $lastPage = $totalPage;

            if($lastPage != 1){

                //SET PREVIOUS PAGE 02
                if($pageno > 1){
                    $previous = "";
                    $previous = $pageno - 1;
                    $pagination .= "<a href='pagination.php?pageno=".$previous."' style='color:#333;'>Previous</a>";
                }

                //SET PAGINATION 01
                // for($i = 1; $i < $lastPage; $i++){
                // for($i = 1; $i < $pageno; $i++){
                for($i = $pageno - 5; $i < $pageno; $i++){

                    //AVOID NEGATIVE 06
                    if($i > 0){
                        $pagination .= "<a href='pagination.php?pageno=".$i." '>".$i."</a>";
                    }
                }

                //SET CURRENT PAGE 03
                $pagination .= "<a href='pagination.php?pageno=".$pageno."' style='color:#333;'>".$pageno."</a>";

                // SET OTHER PAGES 04
                for($i = $pageno + 1; $i <= $lastPage; $i++){
                    $pagination .= "<a href='pagination.php?pageno=".$i." '>".$i."</a>";

                    //SHOW ONLY NEXT FIVE 07
                    if($i > $pageno + 4){
                        break;
                    }
                }

                //SET NEXT PAGE 05
                if($lastPage > $pageno){
                    $next = "";
                    $next = $pageno + 1;
                    $pagination .= "<a href='pagination.php?pageno=".$next."' style='color:#333;'>Next</a>";
                }
            }

            //LIMIT 0,10
            //LIMIT 20,10
            $limit = "LIMIT ".($pageno - 1) * $numberOfRecordsPerPage.",".$numberOfRecordsPerPage;

            // return $pagination;

            return ["pagination"=>$pagination,"limit"=>$limit];

        }


        public function test($array,$table){
            $query = $this->conn->query("SELECT * FROM ".$table." ".$array["limit"]);
            // $query = $this->conn->query("SELECT * FROM ".$table);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function test2($table){
            $query = $this->conn->query("SELECT * FROM ".$table);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }


    // $db = new Database();
    // echo $db->pagination($conn,'xxx',3,1000);

    if(isset($_GET['pageno'])){

        $pageno = $_GET['pageno'];
        $db = new Database();
        // echo "<pre>";
        // print_r($db->pagination($conn,'xxx',$pageno,10));


        $table = 'products';
    
    
        $array = $db->pagination($table,$pageno,10);


        // echo "<pre>";
        $result = $db->test($array,$table);
        echo "<pre>";
        // print_r($result);

        foreach($result as $row){
            // foreach($row as $data){
                // echo "<pre>";
                // print_r($row['pid']);
                // echo "<div ='margin:0 auto;font-size:20px;'><b></b>".$row."</div>";
            // }
        }

        // while($row = $result){
        //     echo "<div ='margin:0 auto;font-size:20px;'><b></b>".$row["cid"]."</div>";
        // }

        print_r($array["pagination"]);
   
    }

?>