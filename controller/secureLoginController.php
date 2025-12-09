<?php
    include("../db/connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $con->prepare("select * from users where username=? and password=?");
    $stmt->bind_param("ss",$username, $password);
    $stmt->execute();
    $res = $stmt->get_result();

    if($res->num_rows < 0){
        echo "no User";
        die();
    }else{
        session_start();
        $_SESSION['user'] = $res->fetch_assoc()['username'];
        header("Location:../index.php");
    }
?>

