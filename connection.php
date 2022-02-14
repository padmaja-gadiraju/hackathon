<?php

$sname = "localhost";
$user_id = "root";
$password = "";

$db_name = "transport";
$con = mysqli_connect($sname, $user_id, $password, $db_name);

if (!$con){
    echo "Connection failed!";
}
?>