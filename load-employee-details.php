<?php
require_once "praveenlib.php";
require_once "datas.php";

if(isset($_POST['id'])){
    $dbconnection = connectSQL($dbdetails);
    if($dbconnection){
        $id=safeString($dbconnection,$_POST['id']);
        $query="select * from hs_hr_employee where employee_id={$id}";
        $result=$dbconnection->query($query);
        if($result){
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                echo 'success`'.$row['emp_firstname'].'`'.$row['emp_dri_lice_num'].'`'.$row['emp_dri_lice_exp_date'].'`'.$row['emp_status'];

            }else{
                echo 'not_found';
            }
        }else{
            echo $query;
            echo 'error';
        }

    }else{
        echo 'error';
    }
}