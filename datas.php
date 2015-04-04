<?php
$dbURL="localhost";
$dbName="transport";
$dbusername="root";
$dbpassword="db";
$dbdetails=array(
    'url'=>$dbURL,
    'name'=>$dbName,
    'username'=>$dbusername,
    'password'=>$dbpassword
);
session_start();
$sessionkey='admin_id';
if(isset($_SESSION[$sessionkey]))$institutionId=$_SESSION[$sessionkey];


$loginurl="login.html";
?>
