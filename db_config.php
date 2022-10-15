<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="class";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        echo $row['id']." - ".$row['name']." - ".$row["username"];
        echo '<br>';
    }
?>