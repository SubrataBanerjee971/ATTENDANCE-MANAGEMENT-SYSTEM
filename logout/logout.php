<?php

session_start();
if(isset($_SESSION['user']))
{
    session_destroy();
    header("Location:/major_project2/login/index.php");
}
else{
    header("Location:/major_project2/landing_page/Landing_Page.php");
}

?>
