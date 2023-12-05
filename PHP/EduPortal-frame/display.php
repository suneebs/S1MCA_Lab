<?php

$conn= mysqli_connect("localhost","root","","student");
// if ($conn) {
//     echo "done";
// }
$sql="select * from framestud";
$result= mysqli_query($conn,$sql);
echo "<table border = 1><tr><th>KTU ID<th>NAME <th>ROLL NO<th>SEMESTER";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['ktu_id'];
    echo "<td>".$row['name'];
    echo "<td>".$row['rollno'];
    echo "<td>".$row['sem']."</tr>";
    
}
echo "</table>";
?>