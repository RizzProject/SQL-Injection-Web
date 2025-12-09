<?php require('./controller/authLogin.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/cyber.png">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.0/styles/default.min.css' rel='stylesheet'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js'></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>
<body bgcolor="#272727">
    <div class="back__">
        <a id="back_btn_" href="index.php">Back</a>
        <a id="back_btn_" href="secureLogin.php">Secure Login</a>
    </div>
    <div id="container__">
        <form action="./controller/loginController.php" method="post">
            <div class="container_box__">
                <div class="text_login">Login</div>
                <div><input class="inpt_login" required placeholder="Username" type="text" name="username" id=""></div>
                <div><input class="inpt_login" required placeholder="Password" type="password" name="password" id=""></div>
                <div><input class="inpt_sbubmit" type="submit" value="Login"></div>
                <div>don't have account? <a href="./register.php" class="a_register">register</a></div>
            </div>
        </form>
    </div>
    <pre class="code_container">
        <code class="language-php">
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
        </code>
    </pre>

</body>
</html>