<?php
include_once 'dbConnection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);


$q3 = mysqli_query($con, "INSERT INTO admin VALUES  (NULL,'$username','$password')");
if ($q3) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["name"]     = $name;
    
    header("location:account.php?q=1");
} else {
    header("location:index.php?q7=Username already exists. Please choose another&name=$name&username=$username&gender=$gender&phno=$phno&branch=$branch&rollno=$rollno");
}
ob_end_flush();
?>