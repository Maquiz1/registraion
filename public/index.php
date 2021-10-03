<?php
  include_once 'database/constants.php';
  // include_once 'includes/user.php';
  if(isset($_SESSION['user_id'])){
    header("Location: http://localhost/ims/public/dashboard.php");
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
     <link type="text/css" rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<!-- CSS LOADER HERE  -->
<div class="overlay">
  <div class="loader"></div>
</div>

      <!-- NAV BAR -->
     <?php  include_once 'templates/header.php';  ?>

     <br>
     <!-- SUCCESS REGISTER CONTAINER ALERT  -->
     <div class="container">
        <?php
          if(isset($_GET['msg']) AND !empty($_GET['msg'])){
            ?>

                <!-- SUCCESS REGISTER ALERT  -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Alert!</strong>
                    <?php echo $_GET['msg']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php
          }
        ?>

     </div>
      <br>
     <div class="container">
     <div class="card mx-auto" style="width: 18rem;">
      <img src="images/login.jpg" class="card-img-top mx-auto" style="width:60%;" alt="login-image">
      <div class="card-body">
        <form id='login_form' onsubmit='return false'>
  <div class="form-group">
    <label for="login_mail"><i class="fa fa-envelop"></i>&nbsp;Email address</label>
    <input type="email" class="form-control" id="login_mail" name="login_mail" aria-describedby="emailHelp">
    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="login_pass"><i class="fa fa-lock"></i>&nbsp;Password</label>
    <input type="password" class="form-control" name="login_pass" id="login_pass">
    <small id="p_error" class="form-text text-muted"></small>
  </div>
  <button type="submit" id="login_btn" name="login_btn" class="btn btn-primary"><i class="fa fa-lock"></i>&nbsp;Login</button>
  <span><a href="register.php">Register</a></span>
</form>
  </div>
  <div class="card-footer"><a href="#">Forget Password ?</a></div>
  </div>

     </div>



</body>
</html>
