<?php
require_once('datas.php');
session_start();
$_SESSION[$sessionkey]=$_POST['id'];
