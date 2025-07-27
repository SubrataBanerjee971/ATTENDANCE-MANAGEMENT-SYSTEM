
<?php

session_start();
if (!isset($_SESSION['t-user'])) {
    header("Location:index.php");
    exit();
}
include "connection.php";


$username = $_SESSION['t-user'];

if(isset($_POST['go']))
{
    $department=$_POST['depart'];
    $semester=$_POST['semester'];
    $subcode=$_POST['subCode'];

$sql="SELECT * FROM student_login WHERE department = '$department' AND semester= '$semester' ";
// $result=mysqli_query($conn,$sql);
if($result=mysqli_query($conn,$sql))
{
    $rowcount=mysqli_num_rows($result);
}
$row=[];

if($result->num_rows>0)
{
    $row=$result->fetch_all(MYSQLI_ASSOC);
}}

?>

<!-- <?php 

// include "connection.php";
// if(isset($_POST['submit']))
// {

//     for($i=1;$i<=$rowcount;$i++)
//     {
//     $rollno=$_SESSION['tphn'];
//     $department=$_POST['depart'];
//     $semester=$_POST['semester'];
//     $status=$_POST['status'];
//     $date=$_POST['date'];
//     $subcode=$_POST['subCode'];
//     $teachername=$_SESSION['user'];
//     $date=date("y-m-d");

//     $sql2="INSERT INTO attendance SET roll='$rollno',department='$department',semester='$semester',status='$status',date='$date',subCode='$subcode',teachername='$teachername'";
//     if($conn->query($sql2))
//     {
//         header("Location:attendence.php");
//         echo "submitted sucessfully";
//     }
//     else{
//         echo "hoyni viii abr kor";
//     }
//     }
// }
    
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <------------------------------Google Fonts-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/attendence.css">
    <title>attandance</title>
</head>

    <div class="nav">
        <ul>
            <li><a href="dashboard.php"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
            <li><a href="Fact-teacher.php"><img class="img2" src="images/rise.png" alt="rise"></a></li>
            <li><a href="profile.php"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
            <li><a href="routine.php"><img class="img4" src="images/calendar-silhouette.png" alt="calander"></a></li>
            <li><a href="/major_project2/logout/logout.php"><img class="img5" src="images/logout.png" alt="logout"></a></li>
        
        </ul>
    </div>
        <p class="p1">Today's Attandance</p>
        <p class="p2"><b>Teacher:</b>Prof.<?php echo $username ?><br></p>
        <label for="" class="p5" ><b>Class Details</b></label>
        <!-- <p class="p3"><b>Total Number of Students : </b><?php echo $rowcount  ?></p> -->
        <form action="attendence.php" method="post">
        
        <!-------------------- subject code --------------------------->
        <select name="subCode" id="subCode" class="subCode" required>
        <option class="s_code" id="s_code" hidden>Subject code</option>
            <option id="s_code" name="s_code" <?php if(isset($_POST['subCode']) && $_POST['subCode'] === 'BCAC601') echo "selected = 'selected'"; ?>  >BCAC601</option>
            <option id="s_code" name="s_code" <?php if(isset($_POST['subCode']) && $_POST['subCode'] === 'BCAC602') echo "selected = 'selected'"; ?>>BCAC602</option>
            <option id="s_code" name="s_code" <?php if(isset($_POST['subCode']) && $_POST['subCode'] === 'BCAD601E') echo "selected = 'selected'"; ?>>BCAD601E</option>
            <option id="s_code" name="s_code" <?php if(isset($_POST['subCode']) && $_POST['subCode'] === 'BCAC691') echo "selected = 'selected'"; ?>>BCAC691</option>
            <option id="s_code" name="s_code" <?php if(isset($_POST['subCode']) && $_POST['subCode'] === 'MSCC201') echo "selected = 'selected'"; ?>>MSCC201</option>
        </select>
        <!-------------------- semester code --------------------------->
        <select name="semester" id="semester" class="semester" required>
        <option class="sem" id="sem" hidden>Semester</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '1st') echo "selected = 'selected'"; ?>>1st</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '2nd') echo "selected = 'selected'"; ?>>2nd</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '3rd') echo "selected = 'selected'"; ?>>3rd</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '4th') echo "selected = 'selected'"; ?>>4th</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '5th') echo "selected = 'selected'"; ?>>5th</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '6th') echo "selected = 'selected'"; ?>>6th</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '7th') echo "selected = 'selected'"; ?>>7th</option>
            <option id="sem" name="sem" <?php if(isset($_POST['semester']) && $_POST['semester'] === '8th') echo "selected = 'selected'"; ?>>8th</option>
        </select>
        <!-------------------- subject code --------------------------->
        <select name="depart" id="department" class="department" required>
            <option class="dept" id="dept" hidden>Department</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'BCA') echo "selected = 'selected'"; ?>>BCA</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'BBA') echo "selected = 'selected'"; ?>>BBA</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'MSC') echo "selected = 'selected'"; ?>>MSC</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'MBA') echo "selected = 'selected'"; ?>>MBA</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'BTTM') echo "selected = 'selected'"; ?>>BTTM</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'MB') echo "selected = 'selected'"; ?>>MB</option>
            <option id="dept" name="dept" <?php if(isset($_POST['depart']) && $_POST['depart'] === 'BT') echo "selected = 'selected'"; ?>>BT</option>
        </select>
        <!-- <p class="p3"><b>Total Number of Students : </b><?php echo $rowcount  ?></p> -->
        <p class="p4" value="date"></p>
    </div>
    <button name="go" class="ui-btn">
  <span>
    Go
  </span>
</button>


    <div class="box">
    <table class="table">
        <thead>
            <tr>
       
        <th class="th1">Name<br><br></th>
        <th class="th2">Roll No<br><br></th>
        <th class="th3">Attandance<br><br></th>
        </tr>
        </thead>
        <?php  
        
        if(!empty($row))
        foreach($row as $rows)
    {  
        ?>
<tr >

    <td><?php echo $rows['uname'] ?></td>
    <td><?php echo $rows['rlno'] ?></td>
  <td style="position: absolute; left:77%;"  >  
    
  <!-- <select name="status" id="status">
    <option value="">status</option>
    <option class="p" value="1">P</option>
    <option class="a" value="0">A</option>
  </select> -->

  Present <input required type="radio" name="attendence[<?php echo $rows['rlno'] ?>]" value="Present">absent
  <input required type="radio" name="attendence[<?php echo $rows['rlno'] ?>]" value="Absent">
  
  <!-- <input type="checkbox" id="present" name="present" class="present" value="P" onclick="cross()" >
        <input type="checkbox" id="absent" name="absent" class="absent" value="A" onclick="cross2()"> -->
            </td>
</tr>




        <!-- <tr class="row">
            <td>Sudipta Chatterjee</td>
            <td>26401221009</td>
            <td><input type="checkbox" id="present" name="present" class="present" value="B" onclick="cross()" >
                <input type="checkbox" id="absent" name="absent" class="absent" value="A" onclick="cross2()">
            </td></tr>
         -->

<?php } ?>



<?php



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if 'attendence' key is set in $_POST and is an array
    if (isset($_POST['attendence']) && is_array($_POST['attendence'])) {
        $att = $_POST['attendence'];
        $date = date('y-m-d');

        $query = "SELECT DISTINCT date FROM attendance";
        $result = $conn->query($query);
        $b = false;
        if ($result->num_rows > 0) {
            while ($check = $result->fetch_assoc()) {
                if ($date == $check['date']) {
                    $b = true;
                    echo "<div class='alert alert-danger'>
                            Attendance already taken today!!!
                          </div>";
                }
            }
        }

        if (!$b) {

            $department=$_POST['depart'];
    $semester=$_POST['semester'];
    $subcode=$_POST['subCode'];
    // $username = $_SESSION['user'];


            // Initialize $insertResult before the loop
            $insertResult = false;
            foreach ($att as $key => $value) {
                if ($value == "Present") {
                    $query = "INSERT INTO attendance(status,roll,date,department,semester,subCode,teachername) VALUES (1, $key, '$date','$department','$semester','$subcode','$username')";
                    $insertResult = $conn->query($query);
                } else {
                    $query = "INSERT INTO attendance(status,roll,date,department,semester,subCode,teachername) VALUES (0, $key, '$date','$department','$semester','$subcode','$username')";
                    $insertResult = $conn->query($query);
                }
            }

            // Check if $insertResult is true for all iterations of the loop
            if ($insertResult) {
                echo "<div class='alert alert-success'>
                        Attendance taken successfully!!!!
                      </div>";
            }
        }
    } else {
        echo "<div class='alert alert-danger'>
               
              </div>";
    }
}



?>


    </table>
    <div class="line"></div>
    </div>

    <button  name="submit" class="submit" value="submit" id="submit">Submit</button>
    </form>
    <script>
     
     let tdate=document.querySelector(".p4");
     
     let newdate= new Date();

     tdate.innerHTML=`<b>Date :  </b>${newdate.getDate()}/${newdate.getMonth()+1}/${newdate.getFullYear()}`;

    </script>
</body>
</html>