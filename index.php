<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Datatable CSS -->
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Datatable JS -->
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <title>REGISTER</title>
</head>

<body>
  <div class="btn btn-info"><a href="register.php">
      <h1>Register New
    </a></h1>
  </div>

  <small id="msg" class="form-text text-muted">.</small>
  <!-- Table -->
  <div class="container">


    <table id='empTable' class='display dataTable'>

      <thead>
        <tr>
          <th>FIRST NAME</th>
          <th>MIDDLE NAME</th>
          <th>LAST NAME</th>
          <th>TAREHE YA KUZALIWA</th>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th> MPO TAYARI KUJA KWENE KIKAO</th>
          <th>MLISHASHIRIKI KWENYE TAFITI YA CHANJO YA MALARIA</th>
          <th>NAMBA YA SIMU</th>
          <th>JINA LA KWANZA</th>
          <th>JINA LA PILI</th>
          <th>JINA LA TATU</th>
          <th>TAREHE</th>
          <th>JINA LA KWANZA</th>
          <th>JINA LA PILI</th>
          <th>JINA LA TATU</th>
          <th>TAREHE</th>
        </tr>
      </thead>

    </table>

  </div>


</body>

</html>


<script>
  $(document).ready(function() {
    $('#empTable').DataTable({


      
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',

      'ajax': {
        'url': 'ajaxfile.php'
      },

      'columns': [
        {
          data: 'first_name'
        },
        {
          data: 'middle_name'
        },
        {
          data: 'last_name'
        },
        {
          data: 'date'
        },
        {
          data: 'chair_first_name'
        },
        {
          data: 'chair_last_name'
        },
        {
          data: 'meeting'
        },
        {
          data: 'malaria'
        },
        {
          data: 'phone'
        },
        {
          data: 'mjazaji1'
        },
        {
          data: 'mjazaji2'
        },
        {
          data: 'mjazaji3'
        },
        {
          data: 'mjazaji_date'
        },
        {
          data: 'mkaguzi1'
        },
        {
          data: 'mkaguzi2'
        },
        {
          data: 'mkaguzi3'
        },
        {
          data: 'mkaguzi_date'
        },
      ]

    });
  });
</script>