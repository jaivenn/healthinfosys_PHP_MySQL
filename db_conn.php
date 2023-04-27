<?php

$name = "localhost";
$uname = "root";
$password = "";

$db_name = "laravel_integration";
$conn = mysqli_connect($sname, $uname, $password, $dbname);

if(!$conn){
    echo "Connection failed";
}
