<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$aVia = mysqli_connect("localhost", "client", "admin");
mysqli_select_db($aVia, "althealth_webmedical");

$result = mysqli_query($aVia, "select * from management where username = '$username' and password = '$password'")
        or die("Failed to query database");
$row = mysqli_fetch_array($result);


if ($row['username'] == $username && $row['password'] == $password && $row['username'] != false && $row['password'] != false){
    echo "login successful!!! Welcome ".$username;
    include('reports.php');
} else {
    include 'index.php';
    exit('Failed to Login');
}
            
?>

