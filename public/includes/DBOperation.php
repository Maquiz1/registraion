<?php
    include_once '../database/db.php';

    class DBOperation extends Database{
        public function addCategory($parent_cat,$cat_name,$status){
            $sql = "INSERT INTO categories (parent_cat,category_name,status) 
            VALUES (:parent_cat,:category_name,:status)";
            $stmt = $this->conn->prepare($sql);
            
            $result = $stmt->execute(
                [
                    'parent_cat'        => $parent_cat,
                    'category_name'     => $cat_name,
                    'status'            => $status

                ]
            );

            if($result){
                return "CATEGORY_ADDED";
            }else{
                return 0;
            }
        }



        //ADD BRANDS
        public function addBrand($brand_name,$status){
            $sql = "INSERT INTO brands (brand_name,status) 
            VALUES (:brand_name,:status)";
            $stmt = $this->conn->prepare($sql);
            
            $result = $stmt->execute(
                [
                    'brand_name'        => $brand_name,
                    'status'            => $status

                ]
            );

            if($result){
                return "BRAND_ADDED";
            }else{
                return 0;
            }
        }


        //ADD PRODUCT
        public function addProduct($cid, $bid, $product_name, $product_price, $product_stock, $added_date, $p_status){
            $sql = "INSERT INTO `products`(`cid`, `bid`, `product_name`, `product_price`, `product_stock`, `added_date`, `p_status`)
            VALUES (:cid, :bid, :product_name, :product_price, :product_stock, :added_date, :p_status)";
            $stmt = $this->conn->prepare($sql);
            
            $result = $stmt->execute(
                [
                   'cid'           => $cid,
                   'bid'           => $bid,
                   'product_name'  => $product_name,
                   'product_price' => $product_price,
                   'product_stock' => $product_stock,
                   'added_date'    => $added_date,
                   'p_status'      => $p_status

                ]
            );

            // return $stmt;

            if($result){
                return "PRODUCT_ADDED";
            }else{
                return 0;
            }
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
    }


    // $oper = new DBOperation();
    // echo $oper->addCategory(1,"Mobiles",1);
    // print_r($oper->addCategory(1,"Mobiles",1));
    // var_dump($oper->addCategory(1,"Mobiles",1));
    // echo '<pre>';
    // print_r($oper->getAllRecords('categories'));
    // var_dump($oper->getAllRecords('categories'));
    // print_r($oper->addProduct(6, 6, 'iPHONE', '12', '10', '2021-02-10', '1'));
    // var_dump($oper->addProduct(6, 6, 'iPHONE', 12, 10, '2021-02-10', 1));

?>