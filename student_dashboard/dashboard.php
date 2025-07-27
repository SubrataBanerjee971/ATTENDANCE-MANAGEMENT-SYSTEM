<?php
session_start();
if (!isset($_SESSION['s-user'])) {
    header("Location:index.php");
    exit();
}

$username = $_SESSION['s-user'];

?>


<?php

include "connection.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve roll number for the given username // Assuming you have the username defined somewhere
$rollNoQuery = "SELECT rlno FROM student_login WHERE uname='$username'";
$rollNoResult = $conn->query($rollNoQuery);
if ($rollNoResult) {
    $row = $rollNoResult->fetch_assoc();
    $rollNo = $row['rlno'];
} else {
    die("Error retrieving roll number: " . $conn->error);
}

// Query to fetch attendance percentage for each subCode
$sql = "SELECT 
            subCode,
            COUNT(*) AS total_classes,
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS attended_classes,
            (SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100 AS attendance_percentage
        FROM 
            attendance
        WHERE 
            roll = '$rollNo' 
        GROUP BY 
            subCode";

$result = $conn->query($sql);

// Initialize variables to avoid undefined variable warnings
$subjectWiseAttendanceDetails = [];
$message = "";
$percentage1 = 0;

// Fetch attendance details and calculate overall attendance
$totalAttendedClasses = 0;
$totalClasses = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalAttendedClasses += $row['attended_classes'];
        $totalClasses += $row['total_classes'];
        $percentage1 = round(($totalAttendedClasses / $totalClasses) * 100, 2);
        // Determine the message based on attendance percentage
        if ($percentage1 < 50) {
            $message = "Very low Percentage";
        } elseif ($percentage1 < 70) {
            $message = "Moderate Percentage";
        } else {
            $message = "Great Percentage";
        }

        // Store attendance details in the $attendanceDetails array
        $subjectWiseAttendanceDetails[] = [
            'subCode' => $row['subCode'],
            'total_classes' => $row['total_classes'],
            'attended_classes' => $row['attended_classes'],
            'attendance_percentage' => round(($row['attended_classes'] / $row['total_classes']) * 100, 2)
        ];
    }
}



// Close connection
$conn->close();
?>
<!-- notification -->
<?php
include "connection.php";

// Assuming you have session management and validation here

// Retrieve notifications from the database
$sql = "SELECT * FROM notice";
$result = $conn->query($sql);

// Check for errors
if ($result === false) {
    // Handle the error, perhaps log it
    echo "Error: " . $conn->error;
    exit(); // Exit the script
}

// Display notifications
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // HTML escape to prevent XSS attacks
        $teachername = htmlspecialchars($row['teachername']);
        $msg = htmlspecialchars($row['msg']);
        $date = htmlspecialchars($row['date']);

        // // Output notifications with consistent styling
        // echo  $teachername ;
        // echo $msg ;
        // echo  $date ;
    }
} else {
    // If no notifications found, display a message
    echo "No notifications found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Fonts-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/dashboard.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <main>
    <div class="container">
        <div class="textarea">
            

            <header>
            <div class="nav">
            <div class="menuToggle" onClick="toggleMenu();"></div>
                <ul class="navigation" onClick="toggleMenu();">
                    <li><a href="dashboard.php" onClick="toggleMenu();"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                    <li><a href="Fact-student.php" onClick="toggleMenu();"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                    <li><a href="profile.php" onClick="toggleMenu();"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                    <li><a href="/major_project2/logout/logout.php" onClick="toggleMenu();"><img class="img5" src="images/logout.png" alt="logout"></a></li>
                
                </ul>
            </div>
            </header>


            <!---------------------------------weather---------------------------------------->
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
<!---------------------------------cal---------------------------------------->
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

            <div class="para">
                <p>It seems like you have <b><?php echo $message; ?></b>
                    <br>
                of your attendance.</p>
            </div>
            <div class="percent">
                <h1><?php echo $percentage1; ?>%</h1>
                <p>Your semester wise percentage.
                    <br>
                    You can also check the overall progress report by using
                    <br>
                    navigation bar.
                </p>
            </div>

           
            <!-- Assuming this section is where you want to display subject-wise attendance details -->
<div class="routine">
<table class="table">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Total Classes</th>
                <th>Attended Classes</th>
                <th>Attendance Percentage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subjectWiseAttendanceDetails as $attendance): ?>
            <tr>
                <td><?php echo $attendance['subCode']; ?></td>
                <td><?php echo $attendance['total_classes']; ?></td>
                <td><?php echo $attendance['attended_classes']; ?></td>
                <td><?php echo $attendance['attendance_percentage']; ?>%</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

        
            <div class="user">
                <img src="<?php echo $image_path; ?>" alt="">
                <p class="name">Hello, <?php echo $username; ?></p>
            </div>

            
            <div class="notifications">
            <h2 style="margin-left: 25px; margin-top:10px;" >Notifications & Reminders</h2>
            <div class="heading">
                       
                        <br><br>
                        <b>Date :</b> <?php echo $date; ?><br><br>
                        <b>Teachername :</b> <?php echo $teachername; ?><br><br>
                        <b>Message:</b>  <pre><?php echo $msg; ?><br><br>
                        </pre>
                         
                    </div>
            
                
</div>
           
            
        </div>
    </div>
  </main> 
  <script src="cal.js"></script>
  <script src="we.js"></script>

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
</body>
</html>