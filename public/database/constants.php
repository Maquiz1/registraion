<?php
    session_start();


    //DATABASE PARAMS
    define('DB_HOST','mysql:host=localhost;dbname=ims');
    define('DB_USER','root');
    define('DB_PASS','Data@2020');
    // define('DB_NAME','ims');

    //APPROOT
    // define('APPROOT',dirname(__DIR__) . '/config.php');
    // define('APPROOT',dirname(__DIR__));
    define('APPROOT', dirname(dirname(__FILE__)));


    //URLROOT (DYANAMIC LINKS)
    define('URLROOT','http://localhost/ims/public');

    //SITE NAME
    define('SITENAME','INVENTORY SYSTEM');





// define('DB_DSN', 'mysql:host=localhost;dbname=dev-db;charset=utf8');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'dxdb');

// function connect() 
// {
//     $opt = array(
//         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//     );
//     return new PDO(DB_DSN,DB_USER,DB_PASSWORD, $opt);
// }
// $conn = connect();

?>






