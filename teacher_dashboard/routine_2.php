<?php

include "connection.php";
// if (!isset($_SESSION['t-user'])) {
//     header("Location:index.php");
//     exit();
// }



// $username = $_SESSION['t-user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------------------Google Fonts-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/routine.css">
    <title>creat routine</title>
</head>
<body>
    <div class="total" id="blur">
    <!--------------------------------- button ------------------------------->
    <button class="pinBtn">
        <span class="IconContainer"> 
          <svg fill="#000000" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-320" y="-320" width="1280" height="800" style="fill:none;"></rect> <g id="Icons1"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1"> </g> <g id="clock"> </g> <g id="external-link"> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> </g> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <g id="logo"> </g> <g id="radio-check"> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g> <path d="M29.975,35.163l3.235,3.234c0.353,0.331 0.5,0.388 0.773,0.481c1.049,0.354 2.203,-0.133 2.576,-1.389l1.204,-4.605l6.544,-6.544l3.69,-0.486c0.431,-0.071 0.691,-0.136 1.153,-0.568l2.47,-2.47c0.275,-0.294 0.298,-0.365 0.379,-0.53c0.372,-0.754 0.33,-1.541 -0.379,-2.299c-3.803,-3.802 -7.485,-7.727 -11.41,-11.403c-0.311,-0.255 -0.383,-0.273 -0.553,-0.344c-0.734,-0.304 -1.454,-0.246 -2.18,0.434l-2.47,2.47c-0.302,0.323 -0.471,0.537 -0.57,1.17l-0.457,3.713l-6.531,6.531l-4.63,1.172c-0.924,0.267 -0.962,0.52 -1.162,0.813c-0.528,0.776 -0.53,1.719 0.239,2.54l3.235,3.235l-13.134,17.979l17.978,-13.134Zm-2.698,-2.698l0.551,0.551l-2.044,1.493l1.493,-2.044Zm11.615,-19.549l8.485,8.486l-0.576,0.575c-1.23,0.162 -2.459,0.324 -3.689,0.486c-0.699,0.116 -0.851,0.286 -1.153,0.569l-7.407,7.407c-0.235,0.251 -0.367,0.389 -0.521,0.908l-0.459,1.755l-6.359,-6.358l1.752,-0.444c0.339,-0.097 0.535,-0.159 0.923,-0.524l7.407,-7.408c0.493,-0.527 0.507,-0.757 0.571,-1.17l0.457,-3.713l0.569,-0.569Z" style="fill-rule:nonzero;"></path> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g id="coffee-beans"> <g id="coffee-bean1"> </g> </g> <g id="coffee-bean-filled"> </g> <g id="coffee-beans-filled"> <g id="coffee-bean2"> </g> </g> <g id="clipboard"> </g> <g id="clipboard-paste"> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </g></svg>
        </span>
        <p class="text">Edit</p>
      </button>
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
        <table class="table" style=" border-spacing: 70px 3.3rem" >
                    
                    <tbody >


<?php

// Retrieve data from the database
$query = "SELECT * FROM routine LIMIT 36"; // Assuming you have a table with more than 36 rows
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Start the table
    

    // Loop through the rows
    $counter = 0;
    while ($row= $result->fetch_assoc() ) {
        // Start a new row after every 6 columns
        if ($counter % 6 == 0) {
            echo "<tr>";
        }

        // Print data in each column
        echo "<div><td><a style=' text-decoration: none;  ' href='attendence.php'>" . $row['sub_code'] . "</a></td></div>";
        
    //   echo  "<td>" . $row['sub_code'] . "</td>";
        // End the row after every 6 columns
        if (($counter + 1) % 6 == 0) {
            echo "</tr>";
        }

        $counter++;
    }

    // Close any open row
    if ($counter % 6 != 0) {
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    echo "No data found in the database.";
}


?>


</tbody>
</table>
</div>
        
    </section>
        <div class="nav">
            <ul>
                <li><a href="dashboard.php"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                <li><a href="Fact-teacher.html"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                <li><a href="profile.php"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                <li><a href="routine_2.php"><img class="img4" src="images/calendar-silhouette.png" alt="calander"></a></li>
                <li><a href="/major_project2/logout/logout.php"><img class="img5" src="images/logout.png" alt="logout"></a></li>
            
            </ul>
        </div>
        </div>
       
</body>
</html>