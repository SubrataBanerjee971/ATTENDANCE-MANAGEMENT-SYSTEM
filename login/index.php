<?php

session_start();
if(isset($_POST['submit']))
{
    include "connection.php";
    $username=$_POST['t-user'];
    $password=$_POST['pass'];


    $sql="select * from teacher_login where uname='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        $_SESSION['t-user']=$username;
        header("Location:/major_project2/teacher_dashboard/dashboard.php");
        exit();
    }
    else{
        $err='<font color="#FF0000">Invalid Username or Password!!</font>';
    }
}




?>

<?php


if(isset($_POST['s_submit']))
{
    
    include "connection.php";
    $username=$_POST['s-user'];
    $password=$_POST['pass'];


    $sql="select * from student_login where uname='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        $_SESSION['s-user']=$username;
        header("Location:/major_project2/student_dashboard/dashboard.php");
        exit();
    }
    else{
        $err='<font color="#FF0000">Invalid Username or Password!!</font>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="index.php" class="sign-in-form" method="post">
          <h2 class="title">Teacher's Log in</h2>

          <?php if (isset($err)): ?>
            <p>
              <?php echo $err; ?>
            </p>
          <?php endif; ?>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="user" name="t-user" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pass" name="pass" required />
          </div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkdin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
        </form>
        <form action="index.php" class="sign-up-form" method="post">
            <h2 class="title">Student's Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="s-user"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass"/>
            </div>
            <input type="submit" class="btn" value="Login" name="s_submit" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkdin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Student ?</h3>
          <p>
          "Access Your Education - Login Now"

          </p>
          <button class="btn transparent" id="sign-up-btn">
            Log in
          </button>
        </div>
        <img src="img/register.jpg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Teacher ?</h3>
          <p>
          "Your Classroom Awaits - Login"
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Log in
          </button>
        </div>
        <img src="img/log.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>