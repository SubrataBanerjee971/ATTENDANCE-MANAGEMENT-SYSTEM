<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tips for Student</title>



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
    background:linear-gradient(to right,#fdf6af , #e3adcf ,rgba(128, 0, 70, 0.361));
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
    cursor: pointer;
}
.img2{
    width:48%;
    position: absolute;
    left: 14px;
    top:250px;
    cursor: pointer;
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
    z-index: -1;
    left: -100px;
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





  @media (max-width: 991px)
{
    /* *
    {
        overflow-x: hidden;
    } */


    body {
    background-repeat: no-repeat;
    height: 1535px;
    background-size: contain;
    overflow-y: scroll;
}
	header,
	header.sticky
	{
		padding: 10px 20px;
	}
	header .navigation
	{
		display: none;
	}
	header .navigation.active
	{
		width: 87%;
		height: calc(100% - 68px);
        padding-left: 0px;
		position: fixed;
		top: 68px;
		left: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		background: #fff;
	}
	header .navigation li
	{
		margin-left: 0;
	}
	header .navigation li a
	{
		text-decoration: none;
		color: #111;
		font-size: 1.6em;
		font-weight: 300;
	}
	.menuToggle {
        position: absolute;
        top: -24px;
        left: -14px;
        width: 40px;
        height: 40px;
        background: url(menu.png);
        background-size: 30px;
        background-repeat: no-repeat;
        background-position: center;
        cursor: pointer;
        transition: 1000ms;
        z-index: 1;
    }
	.menuToggle.active
	{
		background: url(close.png);
		background-size: 25px;
		background-repeat: no-repeat;
		background-position: center;
    z-index: 1;
	}
	header.sticky .menuToggle
	{
		filter: invert(1);
	}
  .nav
    {
        background: transparent;
    }
    .nav ul li{
        list-style: none;
    }
    .mySlides
    {
      position: absolute;
      top: 450px !important;
      left: 0px !important;
      width: 100% !important;
    }

    .mySlides:nth-child(2)
    {
      width: 150% !important;
      left: -100px !important;
    }
    .mySlides:nth-child(3)
    {
      width: 150% !important;
      left: -100px !important;
    }
    #head
    {
      position: absolute;
      top: 90px;
      left: 20px;
      z-index: -1;
    }
    #tip {
    position: absolute;
    width: 84%;
    left: 20px;
    font-size: 17px;
    top: 165px;
    z-index: -1;
}



.note {
    position: absolute;
    top: 928px;
    width: 80%;
    left: 20px;
    z-index: -1;
}
.img1
    {
    width: 5%;
    margin-left: 170px;
    }
    .img2
    {
    width: 5%;
    margin-left: 170px;
    }
    .img3
    {
    width: 5%;
    margin-left: 170px;
    }
    
    .img4
    {
    width: 5%;
    margin-left: 170px;
    margin-top: 100px;
    }
}

</style>
</head>
<body>

<header>
            <div class="nav">
            <div class="menuToggle" onClick="toggleMenu();"></div>
                <ul class="navigation" onClick="toggleMenu();">
                    <li><a href="dashboard.php" onClick="toggleMenu();"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                    <li><a href="Fact-student.php" onClick="toggleMenu();"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                    <li><a href="profile.php" onClick="toggleMenu();"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                    <li><a href="/major_project2/logout/logout.php" onClick="toggleMenu();"><img class="img4" src="images/logout.png" alt="logout"></a></li>
                
                </ul>
            </div>
  </header>
    <h1 id="head">Tips for you: </h1>
    <div id="tip"></div>




    <div class="w3-content w3-section" style="max-width:500px">
        <img class="mySlides" id="teacher-female" src="images2/male_boy.png" style="width: 42%; left: -100px; top: 60px;">
        <img class="mySlides" id="teacher-female" src="images2/female_2_student.png" style="width: 61%; left: -200px">
        <img class="mySlides" id="teacher-female" src="images2/male_student.png" style="width: 60%; left: -190px; top: 22px;" >
        <img class="mySlides" id="teacher-female" src="images2/female_student.png" style="width: 40%;top: 60px; left: -60px;" >
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

// Toggle menu creation
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











  const tips = [
    "93% of Indian students are aware of only seven career options: A survey conducted by Mindler, an online career-counseling platform, showed that 93% of Indian students were only aware of seven career options, which are law, engineering, medicine, accounts and finance, design, computer applications, and IT, and management.",

    "India has over 250 career options: According to researchers, India has over 250 career options available across 40 domains covering 5,000 job types.",

    "Most Indian students pursue commerce: Most students opt for commerce because they don't have any other choice. Science is seen as too hard, while Humanities is seen as too theoretical.",

    "Commerce students face many challenges: Commerce students face many challenges, including the struggle to balance ledgers and balance sheets, the pressure to become a chartered accountant, and the difficulty of math.",

    "India's education sector is growing: The market size of the education sector in India was estimated to grow to 225 billion U.S. dollars, with the ed-tech market expected to reach over 10 billion U.S. dollars by 2025.",

    "Many Indian students go abroad for education: The number of Indian students going abroad for education has sporadically increased over the years, due to better post-study work rights in some countries, more disposable incomes, availability of scholarships and financial aid, and the favorable reputation of foreign institutions amongst Indian employers.",

    "The National Education Policy aims to improve education: The National Education Policy (NEP) was introduced in 2020 to address some of the challenges faced by the education sector. It emphasized the need for vocational education and skill development to tackle underemployment and enhance employability.",

    "Indian web series on student life are popular: There are many Indian web series on student life that are popular, such as The Reunion, Operation MBBS, Alma Matters, Girls Hostel, and Mismatched.",

    "Medical students face a tough life: The life of a medical student is no cakewalk, with an extremely difficult entrance exam and a life of endless studying, cruel seniors, and personal issues.",

    "IITs are notoriously difficult to get into: IITs have a reputation for being notoriously difficult to get into, and are some of the most elite institutions in the country."
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
