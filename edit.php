<?php
//header('location:dbfetch.php');
$con = mysqli_connect("localhost","root","","intern");
$n = $_GET['id'];
echo $n;
$data1 = mysqli_query($con,"select * from details where id=$n");
$a = mysqli_fetch_array($data1); 
?>
<form method="POST" action="update.php?id= <?php echo $a['id'] ?>">
<table>
     <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="<?php echo $a['name']; ?>"></td>
    </tr>
    <tr>
        <td>Mark</td>
        <td><input type="text" name="mark" value="<?php echo $a['mark']; ?>"></td>
    </tr>       
    <tr>
        <td><input type="submit" value="Update" onclick=""></td>
    </tr>
</table>
</form>


