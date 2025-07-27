
<?php
session_start();
if (!isset($_SESSION['s-user'])) {
    header("Location:index.php");
    exit();
}

$username = $_SESSION['s-user'];






        
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Fonts-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/profile.css">
    <title>stu4</title>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="dashboard.php"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
            <li><a href="Fact-student.php"><img class="img2" src="images/rise.png" alt="rise"></a></li>
            <li><a href="profile.php"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
            <li><a href="/major_project2/logout/logout.php"><img class="img4" src="images/logout.png" alt="logout"></a></li>
        
        </ul>
    </div>
    <p class="txt1">Your Profile</p>
    <div class="profile">
    <?php
        $sel="SELECT img_source FROM student_login WHERE uname='$username'";
        $rs=$conn->query($sel);
        while($row=$rs->fetch_assoc()){
      ?>

    

        <img style="width: 100px;" src="picture/<?php echo $row['img_source']; ?>"/>
      

<?php } ?>
    <P class="name"><?php echo $username  ?></P>
    <p class="txt2">Student of<br>
        <b>Swami Vivekananda Institute of Modern Science </b><br>
        Kolkata, West Bengal</p>
    </div>
    <footer class="footer">
        <p class="f1">© 2024 Easy Attend.com All rights reserved</p>
        
        <img class="play" src="images/play-store.png" alt="playstore">
        <img class="app" src="images/appstore.png" alt="appstore">
        <p class="coming">Coming soon...</p>
    
        <button class="button2">Send your feedback</button>
    </footer>
    
</body>
</html>