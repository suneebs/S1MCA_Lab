<?php
$conn=mysqli_connect("localhost","root","","student");

$show ="select * from stud";
$q=mysqli_query($conn,$show);
// if (mysqli_num_rows($q)) {
    echo "<table border=1>
    <tr>
    <th>Roll No
    <th>Name
    <th>Mark
    </tr>";
    while($row=mysqli_fetch_assoc($q)){
        echo "<tr>";
        echo "<td>".$row["rollno"];
        echo "<td>".$row["name"];
        echo "<td>".$row["mark"];
        echo "</tr>";
    }
    echo "</table>";
// }
// else{
//     echo "Table is empty";
// }


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
Enter Roll Number:<br>
<form method="POST" action="update.php" >
<input type =number name=roll><br>
<input type='submit' value='submit' name='submit'>
<?php
// if(isset($_POST["submit"])){

//     $roll =$_POST["roll"];
//     $r="select * from stud where rollno =$roll";
//     $ro=mysqli_query($conn,$r);
//     // echo "<table border=1>";
//     // echo "<tr><td>Roll NO<td>Name <td>Mark</tr>";
//     while($row=mysqli_fetch_assoc($ro)){
//         // echo "<tr>";
//         echo "<td> <br>ROLL NO:<input type='text' value=".$row["rollno"]." disabled><td>NAME:<input tyype='text'
//         value="
//         .$row["name"]." disabled><td>MARK:<input type='text' value=".$row["mark"].">";
//         echo "</tr>";
//     }
// }
//     echo "</table>";
//     echo "<input type='submit' name='update' value='update'>";

    ?>
    
</body>
</html>