<?php
session_start();
session_destroy();

header('location:login.php');

?>
 <!-- <button class="btn"> <a href="logout.php">LOGOUT</a></button> -->