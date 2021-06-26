<?php
    $server = "localhost";
    $Username = "root";
    $password = "";
    $database = "healthcarechatbot";

    $conn = mysqli_connect($server,$Username,$password,$database);

    if(!$conn) {
        echo "<script>alert('connection failed.')</script>";
    }
?>