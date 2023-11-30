<?php

$conn =mysqli_connect('localhost','root','','student');
// if ($conn) {
//     echo "connected";
// }
// else
// echo "not connected";
// echo "<h1>Enter the rollno. to  update mark</h1>";
// echo "<form action=' ' method ='POST'>";
// echo "Enter Roll Number :<input type='number' name='rno'><br>";
// echo "Enter Mark :<input type='number' name='mark'><br>";
// echo "<input type='submit' name='upbtn' value='update'>";

// echo "</form>";

// $rl =$_POST["rno"];
// $mark=$_POST["mark"];
// $update = "update stud set mark = '$mark' where rollno ='$rl'";
// $q=mysqli_query($conn,$update);


/////////////////////////////////////////////////////////////////////////////////////////

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<form method="POST" action="">

<?php
$roll =$_POST["roll"];
$r="select * from stud where rollno =$roll";
$ro=mysqli_query($conn,$r);
// echo "<table border=1>";
// echo "<tr><td>Roll NO<td>Name <td>Mark</tr>";
while($row=mysqli_fetch_assoc($ro)){
    // echo "<tr>";
    echo "<td> <br>ROLL NO:<input type='text' value=".$row["rollno"]." disabled><td>NAME:<input tyype='text'
    value="
    .$row["name"]." disabled><td>MARK:<input type='text' name='mark' value=".$row["mark"].">";
    echo "</tr>";
}

if(isset($_POST['update'])){
    $rl =$_POST["rno"];
    $mark=$_POST["mark"];
    $update = "update stud set mark = '$mark' where rollno ='$rl';";
    $q=mysqli_query($conn,$update);
    if($q){
        echo "updated";
    
    }
    else
    echo "not updated";
}
// echo "</table>";
?>
<input type="submit" value="update" name='update'>
</form>
    
</body>
</html>
<?php


?>