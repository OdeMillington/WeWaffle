<?php

$conn = mysqli_connect("localhost", "root", "", "wewafflesystem");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;


$sql = "SELECT * FROM userlogin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    
    echo "Welcome, " . $row['username'];
    echo " Logged in successfully!";

} else {
    header("Location: index.php");
    $_SESSION['error'] = ".";
}




?>