<?php
require_once "praveenlib.php";
require_once "datas.php";
if (isset($_POST['route'])) {
    $db = connectSQL($dbdetails);
    $route = $_POST['route'];
    $query = "select name,id from tm_bus_stop where route={$route} and institute_id={$institutionId}
";
    if ($result = $db->query($query)) {
        $str = "";
        while ($row = $result->fetch_array()) {
            $stop = $row['id'];
            $query1 = "select id,type from tm_passengers where route={$route} and stop={$stop} and institute_id={$institutionId}";
            $result1 = $db->query($query1);
            $pass = "";
            $passtype = "";
            while ($row1 = $result1->fetch_array()) {
                $pass .= "<p>" . $row1['id'] . "</p>";
                $passtype .= "<p>" . $row1['type'] . "</p>";
            }
            $str .= "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>{$pass}</td><td>{$passtype}</td></tr>";
        }
        echo $str;
    } else echo $db->error;
} else {
    echo "not enough data";
}
?>