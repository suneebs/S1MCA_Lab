<?php

$cn = mysqli_connect('localhost','root','','student');
if ($cn) {
    echo "Connected👌👍";
}
else{
    echo "connection failed 🫤😢";
}

// $sq ="insert into stud values(7,'George',90)";


    $rno =$_POST['rno'];
    $name=$_POST['name'];
    $mark=$_POST['mark'];
    echo $name;
    $val = "insert into stud values($rno,'$name',$mark)";
    $p = mysqli_query($cn,$val);
    if($p){
        echo "<script>alert('Inserted successfully😎');</script>";
    }
    else{
        echo "<script>alert('NOT INSERTED😒');</script>";
    }
?>
