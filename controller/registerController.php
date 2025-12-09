<?php
    require('../db/connect.php');
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    printf($email."\n");
    printf($username."\n");
    printf($password."\n");

    $stmt = $con->prepare("insert into users(`email`,`username`,`password`) values(?,?,?)");
    $stmt->bind_param("sss",$email, $username, $password);
    $stmt->execute();

    header("Location:../login.php");
    
    // print_r($res);

    // if($res){
    //     session_start();
    //     $_SESSION['user'] = $username;
    //     header("Location:../index.php");
    // }else{
    //     header("Location:../register.php");
    //     echo "<script>alert('Error')</script>";
    // }
?>