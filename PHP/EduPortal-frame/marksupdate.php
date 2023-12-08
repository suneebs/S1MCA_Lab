<?php
$conn = mysqli_connect("localhost","root","","student");
$sql = "select ktu_id from framestud";
$sqli = "select DISTINCT subject from marks";
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
        h3{
            color:white;
        }
        select{
            margin-top:30px;
        }
    </style>
</head>
<body style="background: url('https://getwallpapers.com/wallpaper/full/4/e/d/23625.jpg');background-repeat: no-repeat;">

    <form action="" method="post">
        <center><h3>Select ID :<select name='id'>
            <option value="select">select</option>
            <?php
            if (mysqli_num_rows($result)>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=".$row['ktu_id'].">".$row['ktu_id']."</option>";
                }
            }
                ?>

        </select>
        <br>
        Subject :<select name='sub'>
            <option value="select">select</option>
            <?php
            if (mysqli_num_rows($result1)>0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo "<option value=".$row['subject'].">".$row['subject']."</option>";
                }
            }
                ?>

        </select><br><br>
        </h3>
        <button name='submit' type="submit" value ="submit">Submit</button><br><br><br>
        
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$id=$_POST['id'];
$sub=$_POST['sub'];
$show = "select series1,series2,assign1,assign2 from marks where ktu_id ='$id' and subject='$sub'";
$res = mysqli_query($conn,$show);
if (mysqli_num_rows($res)>0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<form action='marksupdate.php' method = 'post'><h3>";
        echo "<input type='hidden' name='sub' value=".$sub.">";
        echo "<input type='hidden' name='id' value=".$id.">";
        echo "Series 1 :<input type ='text' name='s1' value=".$row['series1']."><br>";
        echo "Series 2 :<input type ='text' name='s2' value=".$row['series2']."><br>";
        echo "Assignment 1 :<input type ='text' name='a1' value=".$row['assign1']."><br>";
        echo "Assignmentn2 :<input type ='text' name='a2' value=".$row['assign2']."><br><br><br>";
        echo "<button name='update' type='submit' value ='update'>Update</button><br><br></form>";
    }
}
else
echo "Not Available";
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $sub=$_POST['sub'];
    $ser1=$_POST['s1'];
    $ser2=$_POST['s2'];
    $assign1=$_POST['a1'];
    $assign2=$_POST['a2'];
    $sql ="update marks set series1='$ser1',series2='$ser2',assign1='$assign1',assign2='$assign2' where subject='$sub' and ktu_id='$id'";
    $r= mysqli_query($conn,$sql);
    if ($r) {
        echo "<script> alert('Marks updated');</script>";
    }
    else
    echo "error?!";
}

?>