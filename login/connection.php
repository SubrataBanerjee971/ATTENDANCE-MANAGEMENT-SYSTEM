<?php
$conn=mysqli_connect("localhost","root","","mjr_project");

if($conn->connect_error)
{
    die("connection faield: ".$conn->connect_error);
}
echo "";
?>