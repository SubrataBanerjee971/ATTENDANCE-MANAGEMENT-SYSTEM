<?php
session_start();

include "connection.php";
if (!isset($_SESSION['t-user'])) {
      header("Location:index.php");
      exit();
  }
  
  
  $username = $_SESSION['t-user'];
  
if(isset($_POST['submit']))
{
  $subjectname=$_POST['sub_name'];
  $subjectcode=$_POST['sub_code'];
  $date=$_POST['sub_date'];
  $depertment=$_POST['sub_dept'];
  $semester=$_POST['sub_sem'];
$_SESSION['subcode']=$_POST['sub_code'];

  $sql="INSERT INTO routine SET sub_name='$subjectname',sub_code='$subjectcode',date='$date',semester='$semester',department='$depertment'";
//   $sql2="INSERT INTO attendance SET subCode='$subjectcode' WHERE department='BCA' AND semester='6th' FROM routine";
  
  if($conn->query($sql))
  {
    header("Location:routine_2.php");
  }
  else
  {
    echo "something went wrong";
  }
}

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
    <link rel="stylesheet" href="styles/routine.css">
    <title>creat routine</title>
</head>
<body>
    <div class="total" id="blur">
    <!--------------------------------- button ------------------------------->
    <a href="routine_2.php" ><button class="pinBtn">
        <span class="IconContainer"> 
          <svg fill="#000000" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-320" y="-320" width="1280" height="800" style="fill:none;"></rect> <g id="Icons1"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1"> </g> <g id="clock"> </g> <g id="external-link"> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> </g> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <g id="logo"> </g> <g id="radio-check"> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g> <path d="M29.975,35.163l3.235,3.234c0.353,0.331 0.5,0.388 0.773,0.481c1.049,0.354 2.203,-0.133 2.576,-1.389l1.204,-4.605l6.544,-6.544l3.69,-0.486c0.431,-0.071 0.691,-0.136 1.153,-0.568l2.47,-2.47c0.275,-0.294 0.298,-0.365 0.379,-0.53c0.372,-0.754 0.33,-1.541 -0.379,-2.299c-3.803,-3.802 -7.485,-7.727 -11.41,-11.403c-0.311,-0.255 -0.383,-0.273 -0.553,-0.344c-0.734,-0.304 -1.454,-0.246 -2.18,0.434l-2.47,2.47c-0.302,0.323 -0.471,0.537 -0.57,1.17l-0.457,3.713l-6.531,6.531l-4.63,1.172c-0.924,0.267 -0.962,0.52 -1.162,0.813c-0.528,0.776 -0.53,1.719 0.239,2.54l3.235,3.235l-13.134,17.979l17.978,-13.134Zm-2.698,-2.698l0.551,0.551l-2.044,1.493l1.493,-2.044Zm11.615,-19.549l8.485,8.486l-0.576,0.575c-1.23,0.162 -2.459,0.324 -3.689,0.486c-0.699,0.116 -0.851,0.286 -1.153,0.569l-7.407,7.407c-0.235,0.251 -0.367,0.389 -0.521,0.908l-0.459,1.755l-6.359,-6.358l1.752,-0.444c0.339,-0.097 0.535,-0.159 0.923,-0.524l7.407,-7.408c0.493,-0.527 0.507,-0.757 0.571,-1.17l0.457,-3.713l0.569,-0.569Z" style="fill-rule:nonzero;"></path> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g id="coffee-beans"> <g id="coffee-bean1"> </g> </g> <g id="coffee-bean-filled"> </g> <g id="coffee-beans-filled"> <g id="coffee-bean2"> </g> </g> <g id="clipboard"> </g> <g id="clipboard-paste"> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </g></svg>
        </span>
        <p class="text">Done</p>
      </button></a>
<!-- ---------------------end button -------------------------->
    <p class="p1">Creating Routine</p>
    <section class="sec">
        <div class="div2"><b>Days/<br>Timings</b></div>
        
        <div class="div3"><b>10:30 - 11:30 AM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11:30 - 12:30 AM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:30 - 01:30 PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02:00 - 03:00 PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;03:00 - 04:00 PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;04:00 - 05:00 PM</b></div>
        
        <div class="div4"><b>Monday<br><br><br><br>
            Tuesday<br><br><br><br>
            Wednesday<br><br><br><br>
            Thursday<br><br><br><br>
            Friday<br><br><br><br>
            Saturday</b>
        </div>

        <div class="div1">
            <button onclick="toggle()" class="b1 " id="button-1"><img class="ic1" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b2 " id="button-2"><img class="ic2" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b3 " id="button-3"><img class="ic3" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b4 btn" id="button-4"><img class="ic4" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b5 btn" id="button-5"><img class="ic5" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b6 btn" id="button-6"><img class="ic6" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b7 btn" id="button-7"><img class="ic7" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b8 btn" id="button-8"><img class="ic8" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b9 btn" id="button-9"><img class="ic9" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b10 btn" id="button-10"><img class="ic10" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b11 btn" id="button-11"><img class="ic11" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b12 btn" id="button-12"><img class="ic12" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b13 btn" id="button-13"><img class="ic13" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b14 btn" id="button-14"><img class="ic14" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b15 btn" id="button-15"><img class="ic15" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b16 btn" id="button-16"><img class="ic16" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b17 btn" id="button-17"><img class="ic17" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b18 btn" id="button-18"><img class="ic18" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b19 btn" id="button-19"><img class="ic19" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b20 btn" id="button-20"><img class="ic20" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b21 btn" id="button-21"><img class="ic21" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b22 btn" id="button-22"><img class="ic22" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b23 btn" id="button-23"><img class="ic23" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b24 btn" id="button-24"><img class="ic24" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b25 btn" id="button-25"><img class="ic25" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b26 btn" id="button-26"><img class="ic26" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b27 btn" id="button-27"><img class="ic27" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b28 btn" id="button-28"><img class="ic28" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b29 btn" id="button-29"><img class="ic29" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b30 btn" id="button-30"><img class="ic30" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b31 btn" id="button-31"><img class="ic31" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b32 btn" id="button-32"><img class="ic32" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b33 btn" id="button-33"><img class="ic33" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b34 btn" id="button-34"><img class="ic34" src="images/add.png" alt="icon"></button></a>
            <button onclick="toggle()" class="b35 btn" id="button-35"><img class="ic35" id="ic1" src="images/add.png" alt="icon"></button>
            <button onclick="toggle()" class="b36 btn" id="button-36"><img class="ic36" src="images/add.png" alt="icon"></button></a>


        </div>

        
    </section>
        <div class="nav">
            <ul>
                <li><a href="dashboard.php"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                <li><a href="Fact-teacher.html"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                <li><a href="profile.php"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                <li><a href="routine.php"><img class="img4" src="images/calendar-silhouette.png" alt="calander"></a></li>
                <li><a href="/major_project2/logout/logout.php"><img class="img5" src="images/logout.png" alt="logout"></a></li>
            
            </ul>
        </div>
        </div>
        <!-- ------------------------------------popup -------------------------------------------->

    <section class="container" id="popup">
      <header>Today Routine</header>
      <form action="routine.php" class="form" method="post" id="form">
        <div class="input-box">
          <label>Subject Name</label>
          <input type="text" name="sub_name" placeholder= "Ex- Cyber Security" required />
        </div>

        <div class="input-box">
          <label>Subject Code</label>
          <input type="text" name="sub_code" id="sub_code" placeholder="Ex- BCAC601" required />
        </div>
       
        <div class="column">
         
          <div class="input-box">
            <label>Class Date</label>
            <input type="date" name="sub_date" placeholder="Enter  date" required />
          </div>
        </div>
        
        <div class="input-box address">
          <div class="column">
            <div class="select-box">
              <select name="sub_dept">
                <option hidden>Department</option>
                <option name="sub_dept" value="BCA" >BCA</option>
                <option name="sub_dept" value="BBA" >BBA</option>
                <option name="sub_dept" value="MSC" >MSC</option>
                <option name="sub_dept" value="BT" >BT</option>
              </select>
            </div>
            
          </div>
          <div class="column">
            <div class="select-box">
              <select name="sub_sem" >
                <option hidden>Semester</option>
                <option name="sub_sem" value="1st" >1st</option>
                <option name="sub_sem" value="2nd" >2nd</option>
                <option name="sub_sem" value="3rd" >3rd</option>
                <option name="sub_sem" value="4th" >4th</option>
                <option name="sub_sem" value="5th" >5th</option>
                <option name="sub_sem" value="6th" >6th</option>
                <option name="sub_sem" value="7th" >7th</option>
                <option name="sub_sem" value="8th" >8th</option>
              </select>
            </div>
            
          </div>
        </div>
        
        <button  name="submit" class="submit" value="submit" id="submit" onclick="toggle()">Submit</button>
      </form>
    </section>


    <script type="text/javascript">
    function toggle() {
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup');
        popup.classList.toggle('active');
    }

//===========================================button 1===============================
    let rmbtn1=document.querySelector(".b1");
    const removebtn1=()=>{
          rmbtn1.removeAttribute("onclick");
          rmbtn1.style.opacity="0.5";

    }
    rmbtn1.addEventListener('click',removebtn1);

    //===========================================button 2===============================
    let rmbtn2=document.querySelector(".b2");
    const removebtn2=()=>{
          rmbtn2.removeAttribute("onclick");
          rmbtn2.style.opacity="0.5";

    }
    rmbtn2.addEventListener('click',removebtn2);

    //===========================================button 3===============================
    let rmbtn3=document.querySelector(".b3");
    const removebtn3=()=>{
          rmbtn3.removeAttribute("onclick");
          rmbtn3.style.opacity="0.5";

    }
    rmbtn3.addEventListener('click',removebtn3);

    //===========================================button 4===============================
    let rmbtn4=document.querySelector(".b4");
    const removebtn4=()=>{
          rmbtn4.removeAttribute("onclick");
          rmbtn4.style.opacity="0.5";

    }
    rmbtn4.addEventListener('click',removebtn4);

    //===========================================button 5===============================
    let rmbtn5=document.querySelector(".b5");
    const removebtn5=()=>{
          rmbtn5.removeAttribute("onclick");
          rmbtn5.style.opacity="0.5";

    }
    rmbtn5.addEventListener('click',removebtn5);

    //===========================================button 6===============================
    let rmbtn6=document.querySelector(".b6");
    const removebtn6=()=>{
          rmbtn6.removeAttribute("onclick");
          rmbtn6.style.opacity="0.5";

    }
    rmbtn6.addEventListener('click',removebtn6);

    //===========================================button 7===============================
    let rmbtn7=document.querySelector(".b7");
    const removebtn7=()=>{
          rmbtn7.removeAttribute("onclick");
          rmbtn7.style.opacity="0.5";

    }
    rmbtn7.addEventListener('click',removebtn7);

    //===========================================button 8===============================
    let rmbtn8=document.querySelector(".b8");
    const removebtn8=()=>{
          rmbtn8.removeAttribute("onclick");
          rmbtn8.style.opacity="0.5";

    }
    rmbtn8.addEventListener('click',removebtn8);

    //===========================================button 9===============================
    let rmbtn9=document.querySelector(".b9");
    const removebtn9=()=>{
          rmbtn9.removeAttribute("onclick");
          rmbtn9.style.opacity="0.5";

    }
    rmbtn9.addEventListener('click',removebtn9);

    //===========================================button 1===============================
    let rmbtn10=document.querySelector(".b10");
    const removebtn10=()=>{
          rmbtn10.removeAttribute("onclick");
          rmbtn10.style.opacity="0.5";

    }
    rmbtn10.addEventListener('click',removebtn10);

    //===========================================button 11===============================
    let rmbtn11=document.querySelector(".b11");
    const removebtn11=()=>{
          rmbtn11.removeAttribute("onclick");
          rmbtn11.style.opacity="0.5";

    }
    rmbtn11.addEventListener('click',removebtn11);

    //===========================================button 12===============================
    let rmbtn12=document.querySelector(".b12");
    const removebtn12=()=>{
          rmbtn12.removeAttribute("onclick");
          rmbtn12.style.opacity="0.5";

    }
    rmbtn12.addEventListener('click',removebtn12);

    //===========================================button 13===============================
    let rmbtn13=document.querySelector(".b13");
    const removebtn13=()=>{
          rmbtn13.removeAttribute("onclick");
          rmbtn13.style.opacity="0.5";

    }
    rmbtn13.addEventListener('click',removebtn13);

    //===========================================button 14===============================
    let rmbtn14=document.querySelector(".b14");
    const removebtn14=()=>{
          rmbtn14.removeAttribute("onclick");
          rmbtn14.style.opacity="0.5";

    }
    rmbtn14.addEventListener('click',removebtn14);

    //===========================================button 15===============================
    let rmbtn15=document.querySelector(".b15");
    const removebtn15=()=>{
          rmbtn15.removeAttribute("onclick");
          rmbtn15.style.opacity="0.5";

    }
    rmbtn15.addEventListener('click',removebtn15);

    //===========================================button 16===============================
    let rmbtn16=document.querySelector(".b16");
    const removebtn16=()=>{
          rmbtn16.removeAttribute("onclick");
          rmbtn16.style.opacity="0.5";

    }
    rmbtn16.addEventListener('click',removebtn16);

    //===========================================button 17===============================
    let rmbtn17=document.querySelector(".b17");
    const removebtn17=()=>{
          rmbtn17.removeAttribute("onclick");
          rmbtn17.style.opacity="0.5";

    }
    rmbtn17.addEventListener('click',removebtn17);

    //===========================================button 18===============================
    let rmbtn18=document.querySelector(".b18");
    const removebtn18=()=>{
          rmbtn18.removeAttribute("onclick");
          rmbtn18.style.opacity="0.5";

    }
    rmbtn18.addEventListener('click',removebtn18);

    //===========================================button 19===============================
    let rmbtn19=document.querySelector(".b19");
    const removebtn19=()=>{
          rmbtn19.removeAttribute("onclick");
          rmbtn19.style.opacity="0.5";

    }
    rmbtn19.addEventListener('click',removebtn19);

    //===========================================button 20===============================
    let rmbtn20=document.querySelector(".b20");
    const removebtn20=()=>{
          rmbtn20.removeAttribute("onclick");
          rmbtn20.style.opacity="0.5";

    }
    rmbtn20.addEventListener('click',removebtn20);

    //===========================================button 21===============================
    let rmbtn21=document.querySelector(".b21");
    const removebtn21=()=>{
          rmbtn21.removeAttribute("onclick");
          rmbtn21.style.opacity="0.5";

    }
    rmbtn21.addEventListener('click',removebtn21);

    //===========================================button 22===============================
    let rmbtn22=document.querySelector(".b22");
    const removebtn22=()=>{
          rmbtn22.removeAttribute("onclick");
          rmbtn22.style.opacity="0.5";

    }
    rmbtn22.addEventListener('click',removebtn22);

//===========================================button 23===============================
let rmbtn23=document.querySelector(".b23");
    const removebtn23=()=>{
          rmbtn23.removeAttribute("onclick");
          rmbtn23.style.opacity="0.5";

    }
    rmbtn23.addEventListener('click',removebtn23);

    //===========================================button 24===============================
    let rmbtn24=document.querySelector(".b24");
    const removebtn24=()=>{
          rmbtn24.removeAttribute("onclick");
          rmbtn24.style.opacity="0.5";

    }
    rmbtn24.addEventListener('click',removebtn24);

    //===========================================button 25===============================
    let rmbtn25=document.querySelector(".b25");
    const removebtn25=()=>{
          rmbtn25.removeAttribute("onclick");
          rmbtn25.style.opacity="0.5";

    }
    rmbtn25.addEventListener('click',removebtn25);

    //===========================================button 26===============================
    let rmbtn26=document.querySelector(".b26");
    const removebtn26=()=>{
          rmbtn26.removeAttribute("onclick");
          rmbtn26.style.opacity="0.5";

    }
    rmbtn26.addEventListener('click',removebtn26);

    //===========================================button 27===============================
    let rmbtn27=document.querySelector(".b27");
    const removebtn27=()=>{
          rmbtn27.removeAttribute("onclick");
          rmbtn27.style.opacity="0.5";

    }
    rmbtn27.addEventListener('click',removebtn27);

    //===========================================button 28===============================
    let rmbtn28=document.querySelector(".b28");
    const removebtn28=()=>{
          rmbtn28.removeAttribute("onclick");
          rmbtn28.style.opacity="0.5";

    }
    rmbtn28.addEventListener('click',removebtn28);

    //===========================================button 29===============================
    let rmbtn29=document.querySelector(".b29");
    const removebtn29=()=>{
          rmbtn29.removeAttribute("onclick");
          rmbtn29.style.opacity="0.5";

    }
    rmbtn29.addEventListener('click',removebtn29);

    //===========================================button 30===============================
    let rmbtn30=document.querySelector(".b30");
    const removebtn30=()=>{
          rmbtn30.removeAttribute("onclick");
          rmbtn30.style.opacity="0.5";

    }
    rmbtn30.addEventListener('click',removebtn30);

    //===========================================button 31===============================
    let rmbtn31=document.querySelector(".b31");
    const removebtn31=()=>{
          rmbtn31.removeAttribute("onclick");
          rmbtn31.style.opacity="0.5";

    }
    rmbtn31.addEventListener('click',removebtn31);

    //===========================================button 32===============================
    let rmbtn32=document.querySelector(".b32");
    const removebtn32=()=>{
          rmbtn32.removeAttribute("onclick");
          rmbtn32.style.opacity="0.5";

    }
    rmbtn32.addEventListener('click',removebtn32);

    //===========================================button 33===============================
    let rmbtn33=document.querySelector(".b33");
    const removebtn33=()=>{
          rmbtn33.removeAttribute("onclick");
          rmbtn33.style.opacity="0.5";

    }
    rmbtn33.addEventListener('click',removebtn33);

    //===========================================button 34===============================
    let rmbtn34=document.querySelector(".b34");
    const removebtn34=()=>{
          rmbtn34.removeAttribute("onclick");
          rmbtn34.style.opacity="0.5";

    }
    rmbtn34.addEventListener('click',removebtn34);

    //===========================================button 35===============================
    let rmbtn35=document.querySelector(".b35");
    const removebtn35=()=>{
          rmbtn35.removeAttribute("onclick");
          rmbtn35.style.opacity="0.5";

    }
    rmbtn35.addEventListener('click',removebtn35);

    //===========================================button 36===============================
    let rmbtn36=document.querySelector(".b36");
    const removebtn36=()=>{
          rmbtn36.removeAttribute("onclick");
          rmbtn36.style.opacity="0.5";

    }
    rmbtn36.addEventListener('click',removebtn36);
let routine2=document.querySelector(".img4");


const openRoutine2=()=>{
  window.location.href="/major_project2/teacher_dashboard/routine_2.php"
}

routine2.addEventListener('dblclick',openRoutine2);




</script>

</body>
</html>