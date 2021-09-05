<?php
session_start();
header('location:login.php');

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
$phone= $_POST['phone no'];
$email= $_POST['email'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$address= $_POST['phone no'];

$q = " select * from member where name ='$name' && phone = '$phone' && email = '$email' && age = '$age' && gender = '$gender' && address = '$address'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

// 
if($num==1){
    $_SESSION['username']= $name;
    header('location:home.php');
}else{
    header('location:login.php');
}


?>