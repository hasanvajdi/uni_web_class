<?php

session_start();
require_once('inc/db_config.php');

$username = $conn -> real_escape_string($_POST['username']);
$password = md5($conn -> real_escape_string($_POST['password']));
$remember = @$_POST['remember'];

if($remember){
    setcookie("username", $username, time() + 60 * 60, "/");
}



$mysqlcode = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
$myresult = mysqli_query($conn, $mysqlcode);


// while($row=mysqli_fetch_assoc($myresult)){
//         echo $row['id']." - ".$row['name']." - ".$row["username"];
//         echo '<br>';
//     }
// echo $myresult

if(mysqli_num_rows($myresult) > 0){
    $_SESSION['username'] = $username;
    header('location:admin/index.php');

}else{
    header('location:login.php');
}

?>