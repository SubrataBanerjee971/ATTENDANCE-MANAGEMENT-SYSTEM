<?php

session_start();
$_SESSION['subcode']=$_POST['sub_code'];
header("Location: attendence.php");
exit;

?>