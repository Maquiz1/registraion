

<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Inventory System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>

        <?php 
          if(isset($_SESSION['user_id'])){
            ?>
              <li class="nav-item">
              <a class="nav-link active" href="http://localhost/ims/public/templates/logout.php" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i>&nbsp;Logout</a>
              </li>

            <?php
          }
        ?>
       
    </ul>
  </div>
</nav>
</div>