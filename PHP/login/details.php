<?php

$conn= mysqli_connect("localhost","root","","student");

$email=$_POST['email'];
$pwd =$_POST['pwd'];
$name =$_POST['name'];
$repwd =$_POST['repwd'];
if ($pwd == $repwd){
$sql= "INSERT INTO `signup` (`name`, `email`, `password`, `repassword`) VALUES ('$name', '$email', '$pwd', '$repwd');";
$result= mysqli_query($conn,$sql);
if ($result) {
    echo "Account Created";
}
}
else
echo "password doesnot match";


?>