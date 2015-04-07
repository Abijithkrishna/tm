<?php
require_once('praveenlib.php');
require_once('datas.php');

$keys = array('email','password');

if(checkPOST($keys)){
    $dbConnect = connectSQL($dbdetails);
    if (mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    } else {
        $email = safeString($dbConnect,$_POST['email']);
        $pwd = safeString($dbConnect,$_POST['password']);
        $pwd = md5($pwd);
        $query = "select * from students WHERE email_id='{$email}'";
        $result = $dbConnect->query($query);
        $nuwrows = $result->num_rows;
        if($nuwrows > 0){
            $row = $result->fetch_array();
            if($pwd == $row['password']){
                echo "success";
            }else{
                echo "Wrong password";
            }
        }else{
            echo "Invalid Email id";
        }
    }
    }else{
    echo "Insufficient Data";
}