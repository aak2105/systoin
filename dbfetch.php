<?php
$con = mysqli_connect("localhost","root","","intern");
$l = mysqli_query($con,"select * from details");
?>
<table border='1'>
    <tr>
        <th>id</th><th>name</th><th>mark</th><th>Delete</th><th>Edit</th>
    </tr>
<?php
while($a = mysqli_fetch_array($l))
{ ?>
    <tr>
    
        <td><?php echo $a['id']; ?></td>
        <td><?php echo $a['name']; ?></td>
        <td><?php echo $a['mark']; ?></td>
        <td><a href="delete.php?id= <?php echo $a['id'] ?>  ">Delete</a></td>
        <td><a href="edit.php?id= <?php echo $a['id'] ?>">Edit</a></td>
    
    </tr>
<?php } ?>
</table>



