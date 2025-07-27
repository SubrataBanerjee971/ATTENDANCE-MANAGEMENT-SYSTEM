<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tips for Teacher</title>



<!--Google Fonts-------------------------------------------------------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


<style>
  body {
    font-family: "Urbanist", sans-serif;
    margin: 0;
    padding: 0;
    align-items: center;
    height: 100vh;
    background:linear-gradient(to left,#90cdc3,rgba(255, 41, 159, 0.361) , #f7f6cf );
    transition: 10ms;
  }

  .nav ul li{
    list-style: none;
}
.img1{
    width:48%;
    position: absolute;
    left: 14px;
    top:200px;
}
.img2{
    width:48%;
    position: absolute;
    left: 14px;
    top:250px;
}
.img3{
    width:48%;
    position: absolute;
    left: 14px;
    top:300px;
}
.img4{
    width:48%;
    position: absolute;
    left: 14px;
    top:350px;
}
.img5{
    width:50%;
    position: absolute;
    left: 14px;
    top:600px;
}
.nav{
    background-image: linear-gradient(to left,rgba(255, 41, 159, 0.361) , #f7f6cf);
    border-radius: 30px;
    height: 700px;
    width: 50px;
    position: absolute;
    left: 30px;
    top: 33px;

}

  #tip {
    font-size: 24px;
    position: absolute;
    color: black;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.5); /* Green background with 30% opacity */
    border: 1px solid white;
    padding: 10px;
    left: 400px;
    width: 500px;
    top: 290px;
  }

  #head
  {
    position: absolute;
    top: 200px;
    left: 400px;
  }
  #teacher-female
  {
    width: 45%;
    position: absolute;
    left: -100px;
    z-index: -1;
    transition: 1000ms;
    animation-name: transition;
    animation-duration: 1000ms;
  }


  @keyframes transition{
  0% {margin-left: -100px;
        opacity: 0%;}
  100% {margin-right: 100px;
    opacity: 100%;}
}

  .note
  {
    width: 400px;
    height: 500px;
    font-size: 20px;
    position: absolute;
    color: black;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.5); /* Green background with 30% opacity */
    border: 1px solid white;
    padding: 20px;
    right: 80px;
    top: 100px;
    padding-top: 40px;
  }

  
</style>
</head>
<body>
  <div class="nav">
    <ul>
        <li><a href="dashboard.php"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
        <li><a href="Fact-teacher.html"><img class="img2" src="images/rise.png" alt="rise"></a></li>
        <li><a href="profile.php"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
        <li><a href="routine.php"><img class="img4" src="images/calendar-silhouette.png" alt="calander"></a></li>
        <li><a href="/major_project2/logout/logout.php"><img class="img5" src="images/logout.png" alt="logout"></a></li>

    </ul>
</div>
    <h1 id="head">Tips for you: </h1>
    <div id="tip"></div>

    <div class="w3-content w3-section" style="max-width:500px">
        <img class="mySlides" id="teacher-female" src="images2/female_teacher.png" alt="">
        <img class="mySlides" id="teacher-female" src="images2/male_teacher.png">
        <img class="mySlides" id="teacher-female" src="images2/lady_teacher.png" style="width: 60%; left: -240px; top: 22px;" >
      </div>


    

    <div class="note">
        <p><b>Here are some steps taken by any
            department in case of poor attendance :</b></p>

            <p>
            <b>Below 70% :</b> Write a letter to HOD and then forward it to the Exam cell of the institute.
            </p>

            <p>
            <b>Below 60% :</b> Meet HOD along with your graduation and an apology letter.
            </p>

            <p>
            <b>Below 50% :</b> Meet Principal/ Dean.
            </p>

            <p>
            <b>Below 40% :</b> Submit medical documents for your poor attendance.
            </p>

            <p>
            <b>Below 30–20% :</b> You won't be allowed unless you give valid reasons with proper documents.
            </p>
    </div>


<script>
  const tips = [
    "Faculty development initiatives: Indian colleges have been adopting faculty development programs over the past few decades to improve teaching quality.",

    "National Education Policy: The National Education Policy (NEP) was introduced in 2020 to address the challenges faced by the education sector and promote language inclusivity and digital inclusion.",

    "Ed-tech platforms: The pandemic led to the rise and spread of ed-tech platforms such as Byju’s in India, providing alternative learning options for students.",

    "Faculty development programs: Higher education institutions in India are developing and introducing programs for faculty development aimed at ensuring quality and effectiveness.",

    "Government-supported institutions: Institutions of National Importance (INI) such as IITs, NITs, and AIIMs are recognized for producing highly skilled individuals.",

    "Private school education: There is a growing demand for private school education, driven by the perception of English as the medium of instruction and better infrastructure.",

    "Anganwadi Centers: In rural areas, Anganwadi Centers (AWCs) provide health and formal preschool education and daycare services for children.",

    "Faculty development practices: U.S. colleges and universities have implemented various faculty development practices to improve teaching quality.",

    "Professional development: There is a growing emphasis on professional development for faculty members to enhance their teaching skills and stay updated with new technologies and methodologies.",

    "Teaching-learning: Teaching-learning constitutes the core activity in educational institutions, and initiatives for improving quality of teaching have become essential."
  ];

  let currentIndex = 0;

  function displayTip() {
    document.getElementById('tip').textContent = tips[currentIndex];
    currentIndex = (currentIndex + 1) % tips.length;
  }

  displayTip(); // Display initial tip

  setInterval(displayTip, 5000); // Change tip every 5 seconds



    var myIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
    }










</script>
</body>
</html>
