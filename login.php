<?php
require_once('datas.php');
$_SESSION[$sessionkey] = $_POST['id'];
header('location: index.php');