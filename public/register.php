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

      <!-- REGISTER FORM START HERE  -->
     <div class="container">
     <div class="card mx-auto" style="width: 30rem;">
     <div class="card-header">
         Register Form
     </div>
      <div class="card-body">
        <form id="register_form" onsubmit="return false" autocomplete="off">
        <div class="form-group">
    <label for="username"><i class="fa fa-envelop"></i>&nbsp;Full Name</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
    <small id="u_error" class="form-text text-muted">.</small>
  </div>
  <div class="form-group">
    <label for="email"><i class="fa fa-envelop"></i>&nbsp;Email address</label>
    <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp">
    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password1"><i class="fa fa-lock"></i>&nbsp;Password</label>
    <input type="password" class="form-control"  name="password1" id="password1" placeholder="Enter Password">
    <small id="p1_error" class="form-text text-muted">.</small>
  </div>
  <div class="form-group">
    <label for="password2"><i class="fa fa-lock"></i>&nbsp;Re-Enter Password</label>
    <input type="password" class="form-control"  name="password2" id="password2" placeholder="Re-Enter Password">
    <small id="p2_error" class="form-text text-muted">.</small>
  </div>
  <div class="form-group">
    <label for="usertype"><i class="fa fa-lock"></i>&nbsp;Uer Type</label>
    <select name="usertype" id="usertype"  name="usertype" class="form-control">
      <option value="">Choose User</option>
        <option value="1">Admin</option>
        <option value="2">Other</option>
    </select>
    <small id="t_error" class="form-text text-muted">.</small>
  </div>
  <button type="submit" name="register_btn" id="register_btn" class="btn btn-primary"><i class="fa fa-lock"></i>&nbsp;Register</button>
  <span><a href="index.php">Login</a></span>
</form>
  </div>
  <div class="card-footer text-muted"><a href="#">Forget Password ?</a></div>
  </div>

     </div>

           <!-- REGISTER FORM ENDS HERE  -->



</body>
</html>
