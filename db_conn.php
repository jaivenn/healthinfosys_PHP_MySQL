<?php

$name = "localhost";
$uname = "root";
$password = "";

$db_name = "database";
$conn = mysqli_connect($sname, $uname, $password, $dbname);

if(!$conn){
    echo "Connection failed";
} ?>