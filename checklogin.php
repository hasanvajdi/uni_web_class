<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$remember = @$_POST['remember'];

if($remember){
    setcookie("username", $username, time() + 60 * 60, "/");
}

require_once('inc/db_config.php');


$mysqlcode = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
$myresult = mysqli_query($conn, $mysqlcode);


// while($row=mysqli_fetch_assoc($myresult)){
//         echo $row['id']." - ".$row['name']." - ".$row["username"];
//         echo '<br>';
//     }
// echo $myresult

if($myresult){
    $_SESSION['username'] = $username;
    
    header('location:admin/index.php');

}else{
    header('location:login.php');
}

?>