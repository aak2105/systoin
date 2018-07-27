<?php
header('location:form.html');
$con = mysqli_connect("localhost","root","","intern");
$n = $_POST['name'];
$m = $_POST['mark'];
mysqli_query($con,"insert into details(name,mark) values('$n','$m')");

?>
