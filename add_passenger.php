<?php
require_once "praveenlib.php";
require_once "datas.php";
$keys=array('id','type','route','stop');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $id=safeString($dbconnection,$_POST['id']);
        $route=safeString($dbconnection,$_POST['route']);
        $stop=safeString($dbconnection,$_POST['stop']);
        $type=safeString($dbconnection,$_POST['type']);


        $query= "insert into tm_passengers (id,type,route,stop,institute_id)values("
            .$id.",'".$type."',".$route.",".$stop.",{$institutionId})";
        $result=mysqli_query($dbconnection,$query);
        if($result){
            echo "success";
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
        }
    }
}else{
    echo "not_enough_data";
}

