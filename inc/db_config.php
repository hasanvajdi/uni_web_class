<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="class";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");    
?>