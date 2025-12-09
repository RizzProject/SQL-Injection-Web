<?php
    include("../db/connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $con->query("select * from users where username='$username' and password='$password'");

    if($res->num_rows < 0){
        echo "no User";
        die();
    }else{
        session_start();
        $_SESSION['user'] = $res->fetch_assoc()['username'];
        header("Location:../index.php");
    }
?>

