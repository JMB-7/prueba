<?php
function db(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_iiibtp";

    $connect = mysqli_connect($host,$user,$pass);
    mysqli_select_db($connect, $db);

     return $connect;
}
?>