<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('number','type','capacity','condition','status','route');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $number=safeString($dbconnection,$_POST['number']);
        $type=safeString($dbconnection,$_POST['type']);
        $capcity=safeString($dbconnection,$_POST['capacity']);
        $condition=safeString($dbconnection,$_POST['condition']);
        $status=safeString($dbconnection,$_POST['status']);
        $route=safeString($dbconnection,$_POST['route']);
        $query= "insert into tm_vehicle_details(number,type,capacity,route,vehicle_condition,vehicle_status,institute_id)values('"
            .$number."',".$type.",".$capcity.", {$route} ,'".$condition."','".$status."',{$institutionId})";
        $result=mysqli_query($dbconnection,$query);
        if($result){
            echo "success";
        }else{
            echo "Douplicate Entry ";
        }
    }
}else{
    echo "not_enough_data";
}

