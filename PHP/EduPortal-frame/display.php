
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            color:white;
            
        }
        .center {
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>
<body style="background: url('https://getwallpapers.com/wallpaper/full/4/e/d/23625.jpg');background-repeat: no-repeat;">
    
</body>
</html>
<?php

$conn= mysqli_connect("localhost","root","","student");
// if ($conn) {
//     echo "done";
// }
$sql="select * from framestud";
$result= mysqli_query($conn,$sql);
echo "<table class='center' border = 1><tr><th>KTU ID<th>NAME <th>ROLL NO<th>SEMESTER";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['ktu_id'];
    echo "<td>".$row['name'];
    echo "<td>".$row['rollno'];
    echo "<td>".$row['sem']."</tr>";
    
}
echo "</table>";
?>