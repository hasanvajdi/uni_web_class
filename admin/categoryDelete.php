<?php 
    $id = intval($_GET["id"]);
    require_once("../inc/db_config.php");
    $sql = "DELETE FROM category WHERE id = $id";
    mysqli_query($conn, $sql);
    header("location:categoryShow.php");
?>
 