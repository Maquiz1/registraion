<?php
    include_once '../database/db.php';

    class Manage extends Database{

        public function manageRecordWithPagination($table,$pageno){
            $a = $this->pagination($table,$pageno,2);
            if($table = "categories"){
                $sql = "SELECT p.`category_name` 
                as category,c.`category_name` 
                as parent,p.`status` 
                FROM categories p 
                LEFT JOIN categories c 
                ON p.parent_cat=c.cid".
                " ".$a["limit"]
                ;
            }
                $query = $this->conn->query($sql);
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                $num = $query->rowCount();
                $rows = array();
                if($num > 0){

                    // while($row = $result){
                    //     $rows[] = $row;
                    // }

                    // foreach($result as $row){
                    //     // foreach($row as $data){
                    //         // echo "<pre>";
                            // $rows = $row;
                    //         // echo "<div ='margin:0 auto;font-size:20px;'><b></b>".$row."</div>";
                    //         // print_r("<div ='margin:0 auto;font-size:20px;'><b></b>".$row."</div>");
                    //     // }
                    // }

                }
                return ["rows"=>$result,"pagination"=>$a["pagination"],"count"=>$num];

        }



        public function getAllRecords($table){
            $sql = "SELECT * FROM `$table`"; 
            $stmt = $this->conn->query($sql);
            $num = $stmt->rowCount();
            $rows = array();

            if($num > 0){
                while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
                    $rows[] = $row;
                }
                return $rows;
            }
            return 'NO_DATA';
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
    
                // echo "Current Page ".$pageno."<br><br>";
    
                // echo "Records Per Page ".$numberOfRecordsPerPage."<br><br>";
    
                // echo "TOtal Pages ".$totalPage."<br><br>";
    
                // echo "TOtal Records ".$num."<br><br>";

                $pagination = "<ul class='pagination'>";
    
                if($lastPage != 1){
    
                    //SET PREVIOUS PAGE 02
                    if($pageno > 1){
                        $previous = "";
                        $previous = $pageno - 1;
                        $pagination .= "<li class='page-item'><a class='page-link' pn='".$previous."' href='#' style='color:#333;'>Previous</a></li>";
                    }
    
                    //SET PAGINATION 01
                    // for($i = 1; $i < $lastPage; $i++){
                    // for($i = 1; $i < $pageno; $i++){
                    for($i = $pageno - 5; $i < $pageno; $i++){
    
                        //AVOID NEGATIVE 06
                        if($i > 0){
                            $pagination .= "<li class='page-item'><a class='page-link' pn='".$i."' href='#'>".$i."</a></li>";
                        }
                    }
    
                    //SET CURRENT PAGE 03
                    $pagination .= "<li class='page-item'><a class='page-link' pn='".$pageno."' href='#' style='color:#333;'>".$pageno."</a></li>";
    
                    // SET OTHER NEXT 5 PAGES 04
                    for($i = $pageno + 1; $i <= $lastPage; $i++){
                        $pagination .= "<li class='page-item'><a class='page-link' pn='".$i."' href='#'>".$i."</a></li>";
    
                        //SHOW ONLY NEXT FIVE 07
                        if($i > $pageno + 5){
                            break;
                        }
                    }
    
                    //SET NEXT PAGE 05
                    if($lastPage > $pageno){
                        $next = "";
                        $next = $pageno + 1;
                        $pagination .= "<li class='page-item'><a class='page-link' pn='".$next."' href='#' style='color:#333;'>Next</a></li></ul>";
                    }
                }
    
                //LIMIT 0,10
                //LIMIT 20,10
                $limit = "LIMIT ".($pageno - 1) * $numberOfRecordsPerPage.",".$numberOfRecordsPerPage;
    
                return ["pagination"=>$pagination,"limit"=>$limit];
    
            }

        }


        // $obj = new Manage();
        // echo "<pre>";
        // print_r($obj->manageRecordWithPagination("categories",1));


?>