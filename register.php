<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/cyber.png">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="back_register_"><a id="back_btn_register" href="index.php">Back</a></div>
    <div id="container_register_">
        <form action="./controller/registerController.php" method="post">
            <div class="container_box_register_">
                <div class="input_register_title">Register</div>
                <hr>
                <div class="title_des_reg__">Email</div>
                <div><input class="input_register" required type="email" name="email" id="" placeholder="Email"></div>
                <div class="title_des_reg__">Username</div>
                <div><input class="input_register" required type="text" name="username" id="" placeholder="Username"></div>
                <div class="title_des_reg__">Password</div>                
                <div><input class="input_register" required type="password" name="password" id="" placeholder="Password"></div>
                <div class="title_des_reg__">Repeat Password</div>                
                <div><input class="input_register" required type="password" name="re_password" id="" placeholder="Re-enter Password"></div>
                <div class="input_register_submit__"><input type="submit" class="input_submit_register" value="Register"></div>
            </div>
        </form>
    </div>
</body>
</html>