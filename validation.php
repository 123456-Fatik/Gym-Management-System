<?php
session_start();


$server = 'localhost';
$username = 'root';
$password = '';

$con = mysqli_connect($server, $username, $password);
if($con){
    echo 'connection successful';
}else{
    echo 'no connection';
}

mysqli_select_db($con, 'gym');
$name= $_POST['user'];
$pass= $_POST['password'];

$q = " select * from signin where name ='$name' && password = '$pass'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']= $name;
    header('location:home.php');
}else{
    header('location:login.php');
}


?>