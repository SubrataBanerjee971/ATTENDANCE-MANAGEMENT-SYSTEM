<?php
include("connection.php");

$buf=$_FILES['timg']['tmp_name'];
$fn=time().$_FILES['timg']['name'];

move_uploaded_file($buf,"picture/".$fn);
$conn=mysqli_connect("localhost","root","","mjr_project");
$ins="INSERT INTO   SET name='$pn',pr='$pr',price='$pp',description='$de',pimg='$fn'";
$conn->query($ins);
header("location:sel.php");
?>