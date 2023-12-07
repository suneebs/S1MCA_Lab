
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  h2{
    color:white;
  }
    </style>
</head>
<body style="background: url('https://getwallpapers.com/wallpaper/full/4/e/d/23625.jpg');background-repeat: no-repeat;" >
    <center>
        <form action="" method="post">
            <table>
                
           <tr><td> <h2>NAME :<td><input type="text" name="name"></tr>
           <tr> <td><h2>KTU ID :<td> <input type="text" name="ktuid" ></tr>
           <tr><td><h2>ROLL NO :<td> <input type="number" name="rno" ></tr>
           <tr><td><h2>SEM :<td><input type="text" name="ph"></h2></tr>
        </table>
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
    $sem=$_POST['ph'];
    $sql = "insert into framestud values('$id','$name','$rollno','$sem')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>
        alert('Registeration successful 👍')
        </script>";
    }
}

?>