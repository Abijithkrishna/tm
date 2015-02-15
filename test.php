<?php
require_once "praveenlib.php";
require_once "datas.php";

$routenum = $_POST["routenum"];

//echo $routenum;
$dbconnection = connectSQL($dbdetails);

if(mysqli_connect_errno()) //Check if any error occurred on connection
{
    echo "db_connection_fail";
}
else
{
    $query= "select * from tm_bus_route where route_number=".$routenum;
    $result= mysqli_query($dbconnection,$query);

    while($row=mysqli_fetch_array($result))
    {
        echo "<p>".$row['route_number']."</p><p>".$row['start_location']."</p><p>".$row['end_location']."</p><p>".$row['start_time']."</p>";
    }
}
?>