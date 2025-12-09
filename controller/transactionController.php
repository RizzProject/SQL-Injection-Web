<?php 
    include "../db/connect.php";

    function getTransactionData($userid){
        $userid=1;
        $sql = $con->query("select * from transactionHeader where userid=$userid");
        
        $data = array();
        while($row = $sql->fetch_assoc()){
            $data[] = $row;
        }
        print_r($data);    
        echo($userid);
        return $data;
    }
    echo getTransactionData(1);
    
?>