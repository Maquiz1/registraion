<?php
    include_once 'database/constants.php';
    // include_once 'http://localhost/ims/public/includes/user.php';
    if(isset($_SESSION['user_id'])){
        session_destroy();
    }
    header("Location:http://localhost/ims/public/index.php");
?>