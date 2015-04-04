<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($_POST['id'])){
    $db=connectSQL($dbdetails);
    $exploded=explode("`",$_POST['id']);
    $id=$exploded[0];
    $vehicle=$exploded[1];
        $query="update tm_employee set vehicle = NULL WHERE institue_id={$institutionId} && id=".$id."; update tm_vehicle_details set driver= NULL where institue_id={$institutionId} && number='".$vehicle."';";

    if($db->multi_query($query)){
        echo "success";
    }else echo $db->error;
}else{
    echo "not enough data";
}
?>