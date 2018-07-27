<?php
header('location:dbfetch.php');
$con = mysqli_connect("localhost","root","","intern");
$n = $_POST['name'];
$m = $_POST['mark'];
$id = $_GET['id'];
echo $n;
echo $m;
echo $id;
//mysqli_query($con,"delete from details where id=$id");
mysqli_query($con,"update details set name='$n',mark='$m' where id=$id");


?>