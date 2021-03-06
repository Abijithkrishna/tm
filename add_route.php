<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys = array('number', 'start', 'end', 'time');
if (checkPOST($keys)) {
    $dbconnection = connectSQL($dbdetails);

    if (mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    } else {

        $number = safeString($dbconnection, $_POST['number']);
        $start = safeString($dbconnection, $_POST['start']);
        $end = safeString($dbconnection, $_POST['end']);
        $time = safeString($dbconnection, $_POST['time']);

        $query = "insert into tm_bus_route(route_number,start_location,end_location,start_time,institute_id)values("
            . $number . "," . $start . "," . $end . ",'" . $time . "',{$institutionId})";
        $result = mysqli_query($dbconnection, $query);
        if ($result) {
            echo "success";
        } else {
            echo "Duplicate Entry found";
        }
    }
} else {
    echo "not_enough_data";
}

