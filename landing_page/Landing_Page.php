<?php

session_start();
if (isset($_POST['submit'])) {
  include ("connection.php");
  $username = $_POST['a_user'];
  $password = $_POST['a_pass'];



  $sql = "select * from admin where uname='$username' and password='$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $_SESSION['a_user'] = $username;
    header("Location:/major_project2/register/index.php");
    exit();
  } else {

    $err = '<font color="#FF0000">Invalid Username  Or Password !! </font>';
    

  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Font Awsome------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Google Fonts-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--Custom CSS---------------------------------------------------------->
    <link href="styles/style.css" rel="stylesheet" type="text/css" >

    <title>Easy Attend - Landing Page</title>
</head>

<body >

<div class="total" id="blur">
     <!--Page 1--------------------------------------------------------->
    
        
    <header class="topnav">
     <img class="logoimg" src="images/logo.png" alt="logoimage">
     <p class="logo" >Easy Attend</p>
     <div class="menuToggle" onClick="toggleMenu();"></div>
        <nav class="nav">
            <b>
                <ul class="navigation" onClick="toggleMenu();">
                    
                    
                    <li><a href="#main" onClick="toggleMenu();">Home</a></li>
                    <li><a href="#container2" onClick="toggleMenu();" >About</a></li>
                    <li> <a href="#slider-container" onClick="toggleMenu();">Contact</a></li>
                </ul>
                
        </b></nav>
    </header>



            <!-- <header>
            <div class="nav">
            
                <ul class="navigation" onClick="toggleMenu();">
                    <li><a href="dashboard.php" onClick="toggleMenu();"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                    <li><a href="Fact-student.php" onClick="toggleMenu();"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                    <li><a href="profile.php" onClick="toggleMenu();"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                    <li><a href="/major_project2/logout/logout.php" onClick="toggleMenu();"><img class="img5" src="images/logout.png" alt="logout"></a></li>
                
                </ul>
            </div>
            </header> -->





    
    <div class="main" id="main">
        <img class="fisrt_teacher" src="images/lady_teacher.png" alt="student">
        <img class="first_boy" src="images/male_boy.png" alt="teacher">
        
        <p>Select Your </p>
    <p class="p1"><b>Preferences!</b></p>
    </div>
    <div class="text">
        <p class="p">Your one time<b> Attandance Management System.</b></p>
    </div>
    <div class="button">
        <a href="#" onclick="toggle()"><button class="student_button">Register</button></a>
       <a href="/major_project2/login/index.php"><button class="teacher_button">Login</button></a>
    </div>

   


<!--End of Page 1--------------------------------------------------------->


<!--Starting of Page 2---------------------------------------------------->

<section class="container2" id="container2" >

    <img class="male_teacher" src="images/male_teacher.png" alt="">
    <img class="female_teacher" src="images/female_teacher.png" alt=""> 


<h1 class="second_head">BENEFITS OF USING OUR SITE</h1>
<img class="right_img" src="images/2nd_page_right_side.png" alt="">

</section>

<!--End of Page 2------------------------------------------->


<!--Starting of Page 3---------------------------------------------------->



<section class="container3">

<p class="third_heading_main">Why choose us?</p>

<div class="cards">

    <div class="blank_area"></div>

    <div class="card">
        <img class="card_img" src="images/custom.png" alt="">
        <p class="third_heading">CUSTOMIZABLE<br>SOLUTIONS</p>
        <p class="third_txt">Our dedicated support team is committed to providing timely assistance and resolving any queries or issues you may encounter, ensuring a smooth and hassle-free experience.</p>
    </div>

    <div class="card">
        <img class="card_img" src="images/shield.png" alt="">
        <p class="third_heading">RELIABLE<br>SUPPORT</p>
        <p class="third_txt">We understand that every institution has unique requirements. That's why we offer customizable solutions tailored to meet your specific needs and preferences.</p>
        <p></p>
    </div>

    <div class="card">
        <img class="card_img" src="images/continuous.png" alt="">
        <p class="third_heading">CONTINUOUS<br>INNOVATION</p>
        <p class="third_txt">We are constantly evolving our platform to incorporate the latest technologies, ensuring our clients stay ahead in the ever-changing landscape of education technology.</p>
    </div>

</div>

<button class="third_button">Read more</button>

</section>

<!--End of Page 3--------------------------------------------------------->



<!--Starting of Page 4---------------------------------------------------->

<div class="container4">
<div>
    <img class="rocket" src="images/rocket.png" alt="rocket">
    <p class="fourth_heading">Get Started Today!</p>
    <P class="fourth_txt">Ready to take control of student attendance at<br>
        your institution? Contact us today to learn more<br>
        about our Student Attendance Management<br>
        System and how it can benefit your school or<br>
        organization. Let us help you simplify attendance<br>
        tracking and improve communication with<br>
        students, parents, and staff members.<br>
        </P>
</div>
</div>

<!-----------------------------End of Page 4--------------------------------------------------------->
<!-----------------------------Starting of Page 6---------------------------------------------------->
    <p class="h11">OUR TEAM</p>
    <div class="slider-container" id="slider-container" >
        <div class="slider">
                <div class="card1">
                    <div class="card1-image">
                        <img src="images/sudipta.jpg">
                    </div>
                    <div class="card1-content">
                        <h3>SUDIPTA CHATTERJEE <a href="https://www.facebook.com/bonhi.sikha.7?mibextid=ZbWKwL"><img src="C:\Users\Sudipta\Downloads\facebook (1).png" class="facebook" alt=""></a></h3>
                        
                        <p>"The best error message is the one that never shows up." - Thomas Fuchs </p>
                        
                       
                    </div>
                    
                </div>
           

            <div class="card1">
                <div class="card1-image">
                    <img src="images/subrata.jpg" alt="SUBRATA BANERJEE">
                </div>
                <div class="card1-content">
                    <h3>SUBRATA BANERJEE  <a href="https://www.facebook.com/profile.php?id=100035849084095&mibextid=ZbWKwL"><img src="C:\Users\Sudipta\Downloads\facebook (1).png" class="facebook" alt=""></a></h3>
                    <p>"The function of good software is to make the complex appear to be simple." - Grady Booch

                    </p>
        
                </div>
            </div>


            
            <div class="card1">
                <div class="card1-image">
                    <img src="images/gourabdey.jpg" alt="GOURAB DEY">
                </div>
                <div class="card1-content">
                    <h3>GOURAB DEY  <a href="https://www.facebook.com/profile.php?id=100088824102204&mibextid=ZbWKwL"><img src="C:\Users\Sudipta\Downloads\facebook (1).png" class="facebook" alt=""></a></h3>
                    <p>"The most important property of a program is whether it accomplishes the intention of its user." - C.A.R. Hoare</p>
                </div>
            </div>
            <div class="card1">
                <div class="card1-image">
                    <img src="images/asha.jpg" alt="ASHA CHAKRABORTY">
                </div>
                <div class="card1-content">
                    <h3>ASHA CHAKRABORTY  <a href="https://www.facebook.com/profile.php?id=100068959337977&mibextid=ZbWKwL"><img src="C:\Users\Sudipta\Downloads\facebook (1).png" class="facebook" alt=""></a></h3>
                    <p>"The art of programming is the skill of controlling complexity." - Marijn Haverbeke</p>

                </div>
            </div>
        </div>
    </div>


<!------------------------------end of Page 6---------------------------------------------------->
<!------------------------------Starting of Page 6---------------------------------------------------->

<section class="container5" id="container5" >
    <div class="main-footer">
    <a href=""><p class="fifth_heading">Connect with us</p></a>

    <div class="fifth_blank"></div>

    <div class="fifth_card">
        <p class="office_head"><b>MAIN OFFICE</b></p>
            <p class="office_txt">Kolkata<br>West Benga<br>INDIA</p>
    </div>

    <div class="sixth_card">
        <p class="office_head2"><b>SOCIAL MEDIA</b></p>
        <p class="office_txt2"><br>Facebook<br>Instagram<br>Twitter</p></p>
    </div>


<div class="easyattend">© 2024 EasyAttend.com All rights reserved</div>
</section>
</div>

</div>

<div onclick="scrollToTop()" id="scrollTop" class="scrollTop"><i class="fa-solid fa-arrow-up"></i></div>

<!--End of Page 5--------------------------------------------------------->
<!-----------------------------------------popup form------------------------------------>

<form class="form" id="popup" action="#popup" method="post" target="_blank" data-target="#popup" >
    <div class="flex-column">
    <?php if (isset($err)): ?>
            <p>
              <?php echo $err; ?>
            </p>
          <?php endif; ?>
      <label>Username </label></div>
      <div class="inputForm">
        <svg height="20" viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg"><g id="Layer_3" data-name="Layer 3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
        <input type="text" class="input" name="a_user" id="user" placeholder="Enter your Username" required>
      </div>
    
    <div class="flex-column">
      <label>Password </label></div>
      <div class="inputForm">
        <svg height="20" viewBox="-64 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
        <input type="password" class="input" name="a_pass" id="pass" placeholder="Enter your Password" required>
        <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
      </div>
    
    <div class="flex-row">
      <div>
      <input type="checkbox">
      <label>Remember me </label>
      </div>
      <span class="span">Forgot password?</span>
    </div>
    <button class="button-submit" name="submit" >Log In</button>
    <a href="" onclick="toggle()"><button class="button-submit">Cancel</button></a>
    

    </form>
<script type="text/javascript">
    function toggle() {
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup');
        popup.classList.toggle('active');
    }
</script>

<!-- scrollbutton -->


<script src="land.js"></script>
</body>
    <script>
    window.addEventListener('scroll', function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky", window.scrollY > 0);
		});
		
		function toggleMenu(){
			const menuToggle = document.querySelector('.menuToggle');
			const navigation = document.querySelector('.navigation');
			menuToggle.classList.toggle('active');
			navigation.classList.toggle('active');
		}
    </script>
</html>