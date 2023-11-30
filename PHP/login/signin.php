<?php

$conn = mysqli_connect("localhost","root","","student");

// $email = $_POST["email"];
// $pass =$_POST["pwd"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="result.php" method="post">

            username: <input type="text" name="email" ><br>
            password: <input type="password" name="pwd" ><br>
            <input type="submit" value="submit"><br>
            <!-- No Account? <a href="signup.php">Sign up</a> -->
        </form>
    </center>
</body>
</html>