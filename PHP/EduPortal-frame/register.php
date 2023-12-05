
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            NAME :<input type="text" name="name"><br>
            KTU ID : <input type="text" name="ktuid" ><br>
            ROLL NO : <input type="number" name="rno" ><br>
            PHONE :<input type="text" name="ph"><br>
            <input type="submit" name="submit" value ="Register" >
        </form>
    </center>


</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    $conn= mysqli_connect("localhost","root","","student");
    $name=$_POST['name'];
    $rollno=$_POST['rno'];
    $id=$_POST['ktuid'];
    $phone=$_POST['ph'];
    $sql = "insert into framestud values('$id','$name','$rollno',$phone)";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>
        alert('Registeration successful 👍')
        </script>";
    }
}

?>