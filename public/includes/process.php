<?php
    include_once '../database/constants.php';
    include_once 'user.php';
    include_once 'DBOperation.php';
    include_once 'manage.php';

    //FOR REGISTRATION
    if(isset($_POST['username']) && isset($_POST['email'])){
        $user = new User();
        // print_r($user->createUser($username,$password,$email,$usertype,$notes));
        $result = $user->createUser(
            $_POST['username'],
            $_POST['password1'],
            $_POST['email'],
            $_POST['usertype'],
            'notes'
        );
        echo $result;
        exit();
    }


    //FOR LOGIN
    if(isset($_POST['login_mail']) && isset($_POST['login_pass'])){
        $user = new User();
        $result = $user->usereLogin(
            $_POST['login_mail'],
            $_POST['login_pass']
        );
        echo $result;
        exit();
    }


    // CATEGORY STARTS HERE 

    //Fetch Category
    if(isset($_POST['getCategory'])){
        $obj = new DBOperation();
        $rows = $obj->getAllRecords('categories');
        foreach($rows[0] as $row){
            echo "<option value='".$row["cid"]."'>".$row['category_name']."</option>";
        }
        exit();
    }



    //ADD CATEGORY
    if(isset($_POST['category_name']) && isset($_POST['parent_cat'])){
        $obj = new DBOperation();

        $result = $obj->addCategory(
            $_POST['parent_cat'],
            $_POST['category_name'],
            1
        );

        echo $result;
        exit();
    }


    //MANAGE CATEGORY
    if(isset($_POST["manageCategory"])){
        $m = new Manage();
        $result = $m->manageRecordWithPagination("categories",$_POST["pageno"]);
        $rows = $result["rows"];
        $pagination = $result["pagination"];
        $num = $result["count"];
        if($num > 0){

            $n = 0;
            foreach($rows as $row){           



    ?>
                <tr>

                <td scope="row"><?php echo ++$n; ?></td>
                <td><?php echo $row["category"]; ?></td>
                <td><?php echo $row["parent"]; ?></td>
                <td>
                    <a href="#" did="<?php echo ++$n; ?>" class="btn btn-success btn-sm">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                </td>
                </tr>
    



<?php


            }

            ?>

           <tr><td colspan="5"><?php echo $pagination; ?><td></tr> 

            <?php
            exit();
        }


    }

    // CATEGORY ENDS HERE 



    // BRANDS STARTS HERE 

    //Fetch BRAND TO PRODUCT
    if(isset($_POST['getBrand'])){
        $obj = new DBOperation();
        $rows = $obj->getAllRecords('brands');
        foreach($rows[0] as $row){
            echo "<option value='".$row["bid"]."'>".$row['brand_name']."</option>";
        }
        exit();
    }



    //ADD BRANDS
    if(isset($_POST['brand_name'])){
        $obj = new DBOperation();

        $result = $obj->addBrand(
            $_POST['brand_name'],
            1
        );

        echo $result;
        exit();
    }

    // BRANDS ENDS HERE 


    //PRODUCTS STARTS HERE 

    //Fetch PRODUCT TO PRODUCT
    // if(isset($_POST['getBrand'])){
    //     $obj = new DBOperation();
    //     $rows = $obj->getAllRecords('brands');
    //     foreach($rows[0] as $row){
    //         echo "<option value='".$row["bid"]."'>".$row['brand_name']."</option>";
    //     }
    //     exit();
    // }



    //ADD PRODUCT
    if(isset($_POST['added_date']) && isset($_POST['product_name'])){

        // print_r($_POST['select_cat']);
        // print_r($_POST['select_brand']);
        // print_r($_POST['product_name']);
        // print_r($_POST['product_price']);
        // print_r($_POST['product_qty']);
        // print_r($_POST['added_date']);

        $obj = new DBOperation();

        $result = $obj->addProduct(
                $_POST['select_cat'],
                $_POST['select_brand'],
                $_POST['product_name'],
                $_POST['product_price'],
                $_POST['product_qty'],
                $_POST['added_date'],
                '1'  
        );

        echo $result;
        exit();
    }

    //PRODUCTS ENDS HERE 


    
?>