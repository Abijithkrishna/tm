<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($_POST['route'])){
    $db=connectSQL($dbdetails);
    $route = $_POST['route'];
    $query = "select name,id,distance,estimated_time from tm_bus_stop where route={$route}";
    if($result = $db->query($query)){
        $str="";
        while($row = $result->fetch_array()){
            $str.="<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['distance']."</td><td>"
                .$row['estimated_time']."</td></tr>";
        }
        echo $str;
    }else echo $db->error;
}else{
    echo "not enough data";
}
?>