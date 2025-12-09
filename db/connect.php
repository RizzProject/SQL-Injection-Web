<?php
    $host = "localhost";
    $user = "test";
    $password = "test";
    $db = "testing";
    $port = 3306;


    $con = mysqli_connect($host, $user, $password, $db, $port);
    if($con->connect_error){
        die("Connection failed: ".$con->connect_error);
    }
?>