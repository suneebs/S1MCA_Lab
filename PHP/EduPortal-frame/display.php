
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
echo "</table><br><br>";

$sqli="select * from marks";
$res= mysqli_query($conn,$sqli);
echo "<table class='center' border = 1><tr><th>KTU ID<th>SUBJECT <th>SERIES 1<th>SERIES 2 <th>ASSIGNMENT 1 <th>ASSIGNMENT 2 <th>ATTENDANCE<th>INTERNAL";
while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr><td>".$row['ktu_id'];
    echo "<td>".$row['subject'];
    echo "<td>".$row['series1'];
    echo "<td>".$row['series2'];
    echo "<td>".$row['assign1'];
    echo "<td>".$row['assign2'];
    echo "<td>".$row['attendance']."%";
    echo "<td>".$row['internal']."</tr>";
    
}
echo "</table><br><br>";

?>