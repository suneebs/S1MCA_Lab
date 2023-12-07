<?php
$conn = mysqli_connect("localhost","root","","student");
$sql = "select ktu_id from framestud";
$sqli = "select subject from marks";
$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sqli);
?>

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
        select{
            margin-top:40px;
        }
    </style>
</head>
<body style="background: url('https://getwallpapers.com/wallpaper/full/4/e/d/23625.jpg');background-repeat: no-repeat;">

    <form action="" method="post">
        <center><select name='id'>
            <option value="select">select</option>
            <?php
            if (mysqli_num_rows($result)>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=".$row['ktu_id'].">".$row['ktu_id']."</option>";
                }
            }
                ?>

        </select><br>
        <h2>Subject :<select name='sub'>
            <option value="select">select</option>
            <!-- <?php
            // if (mysqli_num_rows($result1)>0) {
            //     while ($row = mysqli_fetch_assoc($result1)) {
            //         echo "<option value=".$row['subject'].">".$row['subject']."</option>";
            //     }
            // }
                ?> -->
            <option value="maths" name ='maths'>maths</option>
            <option value="DFCA" name ='DFCA'>DFCA</option>
            <option value="ASE" name ='ASE'>ASE</option>
            <option value="ADS" name ='ADS'>ADS</option>
        </select><br><br>
        Marks : <br>
        Series 1 : <input type="number" name ="s1"><br>
        Series 2 : <input type="number" name ="s2"><br>
        Assignment 1 : <input type="number" name="a1"><br>
        Assignment 2 : <input type="number" name="a2"><br>
        <button name='submit' type="submit" value ="submit">Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$id=$_POST['id'];
$sub=$_POST['sub'];
$ser1=$_POST['s1'];
$ser2=$_POST['s2'];
$assign1=$_POST['a1'];
$assign2=$_POST['a2'];
$insert = "insert into marks values ('$id','$sub','$ser1','$ser2','$assign1','$assign2')";
$res = mysqli_query($conn,$insert);
if ($res) {
    echo "<script> alert('Marks entered')</script>";
}
else
echo "<script>alert('marks already entered')</script>";
}
?>