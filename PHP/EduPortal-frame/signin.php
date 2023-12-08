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
        <form action="signin.php" method="post">
            username: <input type="text" name="name" ><br>
            password: <input type="password" name="pwd" ><br>
            <input type="submit" value="submit" name='submit'><br>
            <!-- No Account? <a href="signup.php">Sign up</a> -->
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","student");
$name =$_POST["name"];
$pass = $_POST["pwd"];
$sql ="select * from signup";
$result = mysqli_query($conn,$sql);
$i=0;
    while($row=mysqli_fetch_assoc($result)){
        if ($pass == $row["password"] && $name= $row["name"]) {
        $i=1;
        session_start();
        $_SESSION['user']=$name;
    }
}
if($i==1){
header("Location: main.html");
exit;
}
    else
    echo "No account? <a href= 'signup.php'>sign up</a> ";
}

?>