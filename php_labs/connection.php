<?php
    $host="localhost";
    $uid="root";
    $pass="";
    $db="php_labs";

    $con=mysqli_connect($host,$uid,$pass,$db);
    if(mysqli_connect_errno()){
        echo "Connection to db failed.";
    }
    else{
        echo "Success!";
    }