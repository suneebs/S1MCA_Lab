<?php
$conn=mysqli_connect("localhost","root","","student");
$email =$_POST["email"];
$pass = $_POST["pwd"];
$sql ="select * from signup";
$result = mysqli_query($conn,$sql);
$i=0;
    while($row=mysqli_fetch_assoc($result)){
        if ($pass == $row["password"] && $email= $row["password"]) {
        $i=1;
    }
}
if($i==1)
echo "login successful";
    else
    echo "No account? <a href= 'signup.php'>sign up</a> ";

?>