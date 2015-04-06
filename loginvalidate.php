<?php
require_once "praveenlib.php";
require_once "datas.php";

    $keys = array('email', 'password');
    if (checkPOST($keys)) {
        $dbconnection = connectSQL($dbdetails);

        if (mysqli_connect_errno()) //Check if any error occurred on connection
        {
            echo "db_connection_fail";
        } else {

            $email = safeString($dbconnection, $_POST['email']);
            $password = safeString($dbconnection, $_POST['password']);

            $query = "select password from students where email_id='{$email}'";
            echo $query;
            $result = mysqli_query($dbconnection, $query);
            if ($result) {
                $md5= md5($password);
                $row = $result->fetch_array();
                if($row['password']==$md5){
                    header('location:student.php');
                }
                else{
                    echo "Wrong password";
                }
            } else {
                echo "Invalid Email Id";
            }
        }
    } else {
        echo "not_enough_data";
    }

