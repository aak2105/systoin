<?php
header('location:dbfetch.php');
$con = mysqli_connect("localhost","root","","intern");
$n = $_GET['id'];
echo $n;
mysqli_query($con,"delete from details where id=$n");

?>