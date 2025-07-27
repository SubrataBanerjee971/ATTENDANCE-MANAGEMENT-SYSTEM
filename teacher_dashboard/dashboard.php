
<?php
session_start();
if (!isset($_SESSION['t-user'])) {
    header("Location:index.php");
    exit();
}

$username = $_SESSION['t-user'];

?>


<?php
include "connection.php";

// Assuming you have session management and validation here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = date('y-m-d');
    $content = $_POST['content'];

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO notice (teachername, msg, date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $content, $date);

    // Set parameters and execute
    // Assuming you have the username variable defined somewhere
    if ($stmt->execute()) {
        // echo "Notification created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="textarea">

                <div class="nav">
                    <ul>
                        <li><a href="dashboard.php"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                        <li><a href="Fact-teacher.php"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                        <li><a href="profile.php"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                        <li><a href="routine.php"><img class="img4" src="images/calendar-silhouette.png" alt="calander"></a></li>
                        <li><a href="/major_project2/logout/logout.php"><img class="img5" src="images/logout.png" alt="logout"></a></li>

                    </ul>
                </div>
                <!-- -----------------------------------weather---------------------------- -->
                <!-- <div class="time">

            </div> -->
                <div class="time">
                    <div class="app-title">
                        <p>Weather</p>
                    </div>
                    <div class="notification"> </div>
                    <div class="weather-container">
                        <div class="weather-icon">
                            <img src="icons/unknown.png" alt="">
                        </div>
                        <div class="temperature-value">
                            <p>- °<span>C</span></p>
                        </div>
                        <div class="temperature-description">
                            <p> - </p>
                        </div>
                        <div class="location">
                            <p>-</p>
                        </div>
                    </div>
                </div>

                <!----------------------------------- calender --------------------------->
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev" class="material-symbols-rounded"><i class="fa-solid fa-chevron-left"></i></span>
                            <span id="next" class="material-symbols-rounded"><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>

                <!------------------------- routine --------------------->
                <div style="position: absolute; top: 380px; left: 150px; "><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:30 - 11:30 AM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11:30 - 12:30 AM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:30 - 01:30 PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02:00 - 03:00 PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;03:00 - 04:00 PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;04:00 - 05:00 PM</b></div>

                <!-- <div style="position: absolute; top: 380px; left: 150px; height: 50px"><b>Monday<br>Tuesday</br></div> -->








                <div class="routine" style="display: flex; z-index: -1; padding-left: 95px">


                

                
                    
                <?php
                // Include your database connection
                include 'connection.php';

                // Query to fetch data from the database
                $sql = "SELECT sub_code FROM routine";
                $result = $conn->query($sql);

                // Check if there are rows returned
                if ($result->num_rows > 0) {
                    // Initialize a counter
                    $counter = 0;

                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        

                        if ($counter % 6 == 0) {
                            echo "<br>";
                        }
                        echo "<div style='margin: 60px 50px 50px 50px; z-index: 0'><a style='text-decoration: none;' href='attendence.php'>" . $row['sub_code'] . "</a></div>";


                        // echo "<div><a style=' text-decoration: none;  ' href='attendence.php'>" . $row['sub_code'] . "</a></div>";

                        // Increment the counter
                        if (($counter + 1) % 6 == 0) {
                            echo "</tr>";
                        }
                        $counter++;

                        // Check if six fields have been printed
                        if ($counter % 6 != 0) {
                            // Print a new line after every six fields
                            echo "<br>";
                        }
                    }
                } else {
                    echo "<p class='text'>You haven't created any routine</p>";
                }

                // Close the connection
                $conn->close();
                ?>




                


                </div>


                <div class="user">
                    <i class="fa-solid fa-circle-user"></i>
                    <p class="name">Hello, <?php echo $username ?></p>
                </div>



                <div class="notifications">
                    <div class="heading">
                        Notifications & Reminders
                    </div>
                    <form action="dashboard.php" method="post">
    
    
    <label for="content" ><b>Notification Content:</b></label><br>
    <textarea placeholder="Messege..." id="content" name="content"></textarea><br>
    <!-- Add additional fields for selecting students or classes if necessary -->
    <button class="send" >
  <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
      >
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path
          fill="currentColor"
          d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
        ></path>
      </svg>
    </div>
  </div>
  <span>Post</span>
</button>

</form>
                </div>

                <br>

            </div>
        </div>
    </main>
    <script src="cal.js"></script>
    <script src="we.js"></script>
</body>

</html>