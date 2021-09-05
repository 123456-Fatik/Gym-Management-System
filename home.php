<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="bg5h.jpg" alt="Gym Project" class="bg1">
<div class='home'>
<h1 class='ho'>Welcome <?php echo $_SESSION['username']; ?></h1>
   <h2>You want to log in as a <a href="member.php">Member</a>, or an <a href="instructor.php">Instructor</a>?</h2><br>
  <button class="btn"><a href="member.php">Login as Member</a></button>
  <button class="btn"><a href="instructor.php">Login as Instructor</a></button>
</div>
  
    
   
</body>
</html>