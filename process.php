<?php
include 'add.php';

//FOR REGISTRATION
if ($_POST['action'] == 'register_user') {
    $client = new AddClient();
    $result = $client->addData(
        $_POST['first_name'],
        $_POST['middle_name'],
        $_POST['last_name'],
        $_POST['date'],
        $_POST['chair_first_name'],
        $_POST['chair_last_name'],
        $_POST['meeting'],
        $_POST['malaria'],
        $_POST['phone'],
        $_POST['mjazaji1'],
        $_POST['mjazaji2'],
        $_POST['mjazaji3'],
        $_POST['mjazaji_date'],
        $_POST['mkaguzi1'],
        $_POST['mkaguzi2'],
        $_POST['mkaguzi3'],
        $_POST['mkaguzi_date'],
    );
    echo $result;
    exit();
}

?>