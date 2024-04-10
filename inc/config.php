<?php

$host = "sql309.infinityfree.com";
$user = "if0_36305892";
$pass = "9wsgJmfp8r1UQDZ";
$name = "if0_36305892_lamark";

$con = "";
try{
    $con = mysqli_connect($host,$user,$pass,$name);
}
catch(mysqli_sql_exception){
    die("Fail to connect to database");
}