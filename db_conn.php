<?php
    $sname = "localhost";
    $uname = "root";
    $password="";

    $db_name = "test_db";

    $conn = mysqli_connect($servername, $sname, $uname, $db_name);

    if(!$conn){
        echo "Connection Failed";
    }
?>