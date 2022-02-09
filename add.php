<?php
include 'db.php';

    class AddClient extends Database{
        public function addData($first_name, $middle_name, $last_name, $date, $chair_first_name, $chair_last_name, $meeting, $malaria, $phone, $mjazaji1, $mjazaji2, $mjazaji3, $mjazaji_date, $mkaguzi1, $mkaguzi2, $mkaguzi3, $mkaguzi_date){
            $sql = "INSERT INTO client (first_name, middle_name, last_name, date, chair_first_name, chair_last_name, meeting, malaria, phone, mjazaji1, mjazaji2, mjazaji3, mjazaji_date, mkaguzi1, mkaguzi2, mkaguzi3, mkaguzi_date) 
            VALUES (:first_name, :middle_name, :last_name, :date, :chair_first_name, :chair_last_name, :meeting, :malaria, :phone, :mjazaji1, :mjazaji2, :mjazaji3, :mjazaji_date, :mkaguzi1, :mkaguzi2, :mkaguzi3, :mkaguzi_date)";

            $stmt = $this->conn->prepare($sql);
            
            $result = $stmt->execute(
                [
                    'first_name'       => $first_name,
                    'middle_name'      => $middle_name,
                    'last_name'        => $last_name,
                    'date'             => $date,
                    'chair_first_name' => $chair_first_name,
                    'chair_last_name'  => $chair_last_name,
                    'meeting'          => $meeting,
                    'malaria'          => $malaria,
                    'phone'            => $phone,
                    'mjazaji1'          => $mjazaji1,
                    'mjazaji2'          => $mjazaji2,
                    'mjazaji3'          => $mjazaji3,
                    'mjazaji_date'      => $mjazaji_date,
                    'mkaguzi1'          => $mkaguzi1,
                    'mkaguzi2'          => $mkaguzi2,
                    'mkaguzi3'          => $mkaguzi3,
                    'mkaguzi_date'      => $mkaguzi_date    
                ]
            );
    
            if($result){
                return "CLIENT ADDED SUCCSEFULLY";
            }else{
                return "Error in adding Data";
            }
        }
    }

    // $test = new AddClient();
    // $test2 = $test->addData('Winstone','Joseph','Makwesheni','1993-05-22','MZEE','HAMISI','Yes','No','0755192321','REHEMA','2022-02-03','JUMA','2022-02-07');
    // print_r($test2);
?>