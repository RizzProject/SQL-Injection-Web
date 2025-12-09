<?php 
require("./controller/auth.php");
require("./db/connect.php");
$username = $_SESSION['user'];
$userid = 1;
if(isset($_GET['userid'])){
    $userid = $_GET['userid'];
}
$sql = $con->query("select * from transactionHeader where userid=$userid");
        
if(!$sql){
    echo "Error Description: ".$con->error;
}

$data = array();
while($row = $sql->fetch_assoc()){
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>1337-0</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<link rel="icon" type="image/png" href="img/cyber.png">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.0/styles/default.min.css' rel='stylesheet'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js'></script>
    <script>hljs.initHighlightingOnLoad();</script>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/transaction.css">
	
</head>
<body>
	</div>
	<div>
		<nav>
			<div><a href="index.php">Home</a></div>
			<div><a href="./transaction.php?userid=1">Transaction</a></div>
			<div><a href="./controller/logoutController.php">Logout, <?php echo $username ?></a></div>
		</nav>
	</div>

    <div class="table_container">
        <div class="row_container">
            <div class="d_trid">Transaction ID</div>
            <div class="d_uid">User ID</div>
            <div class="d_tdate">Transaction Date</div>
        </div>
        <?php 
            foreach ($data as $d) {
        ?>
        <div class="row_container">
            <div class="d_trid"><?php echo $d['transactionid'] ?></div>
            <div class="d_uid"><?php echo $d['userid'] ?></div>
            <div class="d_tdate"><?php echo $d['transaction_date'] ?></div>
        </div>

        <?php } ?>
    </div>
    <pre class="code_container">
        <code class="language-php">
$userid = 1;
if(isset($_GET['userid'])){
    $userid = $_GET['userid'];
}
$sql = $con->query("select * from transactionHeader where userid=$userid");
        
$data = array();
while($row = $sql->fetch_assoc()){
    $data[] = $row;
}
        </code>
    </pre>
</body>

</html>