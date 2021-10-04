<?php
  include_once 'database/constants.php';
  // include_once 'includes/user.php';
  if(!isset($_SESSION['user_id'])){
    header("Location: http://localhost/ims/public/index.php");
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRUGS INVENTORY SYSTEM</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
      <!-- NAV BAR -->
     <?php  include_once 'templates/header.php';  ?>
      <br>
     <div class="container">
      <div class="row">
        <div class="col-md-4">
                <div class="card" style="width: 20rem;">
          <img src="images/user.png" class="card-img-top mx-auto" style="width:60%" alt="user-image">
          <div class="card-body">
            <h5 class="card-title">Prifile Info</h5>
            <p class="card-text"><i class="fa fa-user"></i>&nbsp;Winstone Maquiz.</p>
            <p class="card-text"><i class="fa fa-user"></i>&nbsp;Admin.</p>
            <p class="card-text">Lst Login : xx-xxxx</p>
            <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit Profile</a>
          </div>
        </div>
        </div>
        <div class="col-md-8">
          <div class="jumbotron" style="width;100%;height:100%;">
            <h1>Welcome Admin</h1>
            <div class="row">
                <div class="col-sm-6">
                <iframe src="https://free.timeanddate.com/clock/i7zrlhto/n71/szw210/szh210/hocaaa/hbw10/cf100/hgr0/fiv0/fas34/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hhs1/hms1/hsc000/hss1" frameborder="0" width="210" height="210"></iframe>


                </div>
                <div class="col-sm-6">
                <div class="card">
      <div class="card-body">
        <h5 class="card-title">New Orders</h5>
        <p class="card-text">Here You Can make new Orders.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#order">New Order</a>
      </div>
    </div>
                </div>

            </div>
          </div>
        </div>
      </div>
     </div>

     <br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Here You Can manage  and Add Categorires.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#category">Add </a>
        <a href="manage_category.php" class="btn btn-primary">Manage</a>
      </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Brands</h5>
        <p class="card-text">Here You Can manage  and Add Brand.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#brand">Add</a>
        <a href="#" class="btn btn-primary">Manage</a>
      </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Products</h5>
        <p class="card-text">Here You Can manage and Add Products.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#product">Add </a>
        <a href="#" class="btn btn-primary">Manage</a>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- Include Category modal here  -->
<?php
   include_once 'templates/category.php';
?>
<!-- Include Category modal here  -->
<?php
   include_once 'templates/brand.php';
?>
<!-- Include Category modal here  -->
<?php
   include_once 'templates/product.php';
?>
</body>
</html>
