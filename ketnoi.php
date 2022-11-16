<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qldiem";

    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connect) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
?>