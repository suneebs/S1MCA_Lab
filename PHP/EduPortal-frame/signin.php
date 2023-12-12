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
    <!-- <script src="script.js"></script> -->
    <style>
       h1,h2,h3{
            color: antiquewhite;
        }
        a{
            color:white;
            text-decoration: none;
        }
    </style>
</head>
<body style="background: url('https://getwallpapers.com/wallpaper/full/4/e/d/23625.jpg');background-repeat: no-repeat;">
    <center>
        <form action="signin.php" method="post">
            <h1 id='name' ><?php echo @$_GET['q']; ?>
            <br><br>
        </h1>
            <!-- <input type="text" id='name'><br> -->
            <h2>username: <input type="text" name="name" ></h2><br>
            <h2>password: <input type="password" name="pwd" ></h2><br>
                <input type="submit" id='btn'  value="submit" name='submit'><br>
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
    echo "<center><h3>No account? <a href= 'signup.php'>sign up</a> ";
}

?>