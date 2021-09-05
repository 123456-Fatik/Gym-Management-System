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
    <img src="bg3.jpg" alt="Gym Project" class="bg1">
    <div class="log">
        <h1>Member Portal</h1>
    <form action="msubmit.php" method="post" class='f1'>

<input type="text" name='user' placeholder='Enter Username'>
<input type="number" name='phone no' placeholder='Enter Phone No' >
<input type="email" name='email' placeholder='Enter Email' >
<input type="number" name='age' placeholder='Enter Age' >
<input type="text" name='gender' placeholder='Enter Gender' >
<input type="text" name='address' placeholder='Enter Address' >
<button type="submit" class='btn'> Submit</button>
    </form>
   
    </div>
</body>
</html>

<!-- INSERT INTO `member` (`member_id`, `user_id`, `name`, `phone`, `email`, `age`, `gender`, `address`) VALUES (NULL, '9', 'fatik', '2345775', 'dshfk@email.com', '22', 'male', 'fhfnf'); -->