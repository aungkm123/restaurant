<?php

    //start session
    session_start();

// Execute query and save data in atabase

//constants to store non REPEATING VALUES
define('SITEURL', 'http://localhost/foodorder/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME','food-order');



$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//connect to mysql
$db_select = mysqli_select_db($conn , DB_NAME) or die(mysqli_error());//select database




?>