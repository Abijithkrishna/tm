<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($_POST['id'])){
    $db=connectSQL($dbdetails);
    $query="delete from tm_student_details where id=".$_POST['id'];
    if($db->query($query)){
        echo "success";
    }else echo $db->error;
}else{
    echo "not enough data";
}
?>