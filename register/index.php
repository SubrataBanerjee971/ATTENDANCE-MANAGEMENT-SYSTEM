<?php
session_start();
include("connection.php");

if (isset($_POST['submit1'])) {
    $username = $_POST['Sname'];
    $email = $_POST['Smail'];
    $password = $_POST['Spass'];
    $department = $_POST['department'];
    $phno = $_POST['Sphn'];
    

    $buf= $_FILES['Simg1']['tmp_name'];
    $fn= time() . $_FILES['Simg1']['name'];
    move_uploaded_file($buf,"../images/". $fn);

    $sql = "SELECT * FROM teacher_login WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email ID already exists!";
    } else {
        $sql = "INSERT INTO teacher_login SET uname='$username',email='$email',password='$password',department='$department',phno='$phno',img_source='$fn'";
        if ($conn->query($sql)) {
            header("location:index.php");
            echo '<script>alert("registration successful")</script>';
        } else {
            echo "<script>alert('SOMETHING WENT WRONG!!!!!');</script>";
        }
    }
}

?>
<!-- Image Insert for TEACHER ---------------------->
<?php

include "connection.php";
if(isset($_POST['submit1']))
{
    $buf=$_FILES['Simg']['tmp_name'];

    $query="INSERT INTO teacher_login (img_source) VALUES ('$buf')";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['Simg']['tmp_name'],"images/".$_FILES['Simg']['name']);
        $_SESSION['status'] = "image storted successfully";
        header('Location: index.php');
    }
    else{
        $_SESSION['status']="image not inserted";
        header('Location: index.php');
    }
}

?>

















<!------------------- student -------------------------------->
<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $username=$_POST['tname'];
    $email=$_POST['tmail'];
    $password=$_POST['tpass'];
    $department=$_POST['tdept'];
    $semester=$_POST['tsem'];
    $phno=$_POST['tphn'];

    $buf=$_FILES['timg']['tmp_name'];
    $fn=time().$_FILES['timg']['name'];
    move_uploaded_file($buf,"images/".$fn);
    // $simg=$_POST['timg'];
    
    // $subCode=$_SESSION['subCode'];
    $sql="SELECT * FROM student_login WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        echo "This email already exists";
    }
    else{

       $sql="INSERT INTO student_login SET uname='$username',email='$email',password='$password',department='$department',semester='$semester',rlno='$phno',img_source='$fn'";
    //    $sql2="INSERT INTO attendance SET department='$department',semester='$semester',roll='$phno'";
       
       if(($conn->query($sql)))
       {
        
        header("Location:index.php");
       }
       else{
        echo "wrong";
       }
    }
}

?>

<!-- Image Insert for STUDENT ---------------------->
<?php

include "connection.php";
if(isset($_POST['submit']))
{
    $buf=$_FILES['timg']['tmp_name'];

    $query="INSERT INTO student_login (img_source) VALUES ('$buf')";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['timg']['tmp_name'],"picture/".$_FILES['timg']['name']);
        $_SESSION['status'] = "image storted successfully";
        header('Location: index.php');
    }
    else{
        $_SESSION['status']="image not inserted";
        header('Location: index.php');
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Reg-student</title>  

    
</head>
<body>

    <div class="top-sec">
        <h1>REGISTRATION</h1>
        <div class="select">

            <div class="s">
                <input type="radio" id="studentbtn" name="college" value="student" onclick="student()">
                <label for="student">Student</label>
            </div>


            <div class="s">
                <input type="radio" id="teacherbtn" name="college" value="teacher" onclick="teacher()" checked="checked">
                <label for="student">Teacher</label>
            </div>
        </div>
    </div>

<!-------------------------------------------- back button -------------------------------------->
    <a href="/major_project2/logout/logout.php">
    <div class="back-btn">
    <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </div>
    </a>
<!--------------------------------------------end  back button -------------------------------------->

    <div class="container" id="teacher">
        
        <form action="index.php" class="form" method="post" >
            <div class="box">
                <div class="name">
                    <label for="Sname">Name</label><br>
                    <input type="text" id="Sname" name="Sname" placeholder="Enter Teacher Name
                    ">
                </div>

                <div class="email">
                    <label for="Smail">Email</label><br>
                    <input type="email" id="Smail" name="Smail" placeholder="Enter Teacher Email">
                </div>
                
            <div class="marge">
                    <div class="pass">
                        <label for="Spass">Password</label><br>
                        <input type="password" id="Spass" name="Spass" placeholder="Enter Teacher Password">
                    </div>
                    
    
                <div class="sub">
                        <label for="Ssub">Department</label>
                        <div id="Ssub">
                            <div class="add">
                                <div class="BCA">
                                    <input type="radio" id="bca" name="department" value="BCA">
                                    <label for="bca">BCA</label>
                                </div>
                                <br>
                                <div class="BBA">
                                    <input type="radio" id="bba" name="department" value="BBA">
                                    <label for="bba">BBA</label>
                                </div>
                                <br>
                                <div class="MB">
                                    <input type="radio" id="mb" name="department" value="MB">
                                    <label for="mb">MB</label>
                                </div>
                                <br>
                                <div class="BTTM">
                                    <input type="radio" id="bttm" name="department" value="BTTM">
                                    <label for="bttm">BTTM</label>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>

                <div class="phn">
                    <label for="Sphn">Phn no.</label><br>
                    <input type="number" id="Sphn" name="Sphn" placeholder="Enter Teacher Phone No.">
                </div>
                <div class="img1">
                    <label for="Simg">Image</label><br>
                    <input type="file" id="Simg1" name="Simg1">
                </div>
                
                 <button class="submit" name="submit1" >Submit</button>
            </div>
        </form>
    </div>

    <!--------------------------------- student ----------------------->
   
    <div class="container1" id="student">
        
        
        <form action="index.php" class="form1" method="post" enctype="multipart/form-data">
            <div class="box1">
                <div class="name1">
                    <label for="Sname">Name</label><br>
                    <input type="text" id="Sname1" name="tname" placeholder="Enter Student Name
                    ">
                </div>

                <div class="email">
                    <label for="Smail">Email</label><br>
                    <input type="text" id="Smail1" name="tmail" placeholder="Enter Student Email">
                </div>
                
                <div class="marge1">
                    <div class="pass1">
                        <label for="Spass">Password</label><br>
                        <input type="password" id="Spass1" name="tpass" placeholder="Enter Student Password">
                    </div>
    
                    <div class="dept1">
                        <label for="Sdept">Department</label><br>
                        <!-- <input type="text" id="Sdept1" name="Sdept" placeholder="Select Department"> -->
                        <select name="tdept" id="Sdept1">
                            <option class="opt" id="opt" hidden>Select Department</option>
                            <option id="opt" name="dep" value="BCA">BCA</option>
                            <option id="opt" name="dep" value="BBA">BBA</option>
                            <option id="opt" name="dep" value="MSC">MSC</option>
                            <option id="opt" name="dep" value="MBA">MBA</option>
                            <option id="opt" name="dep" value="BTTM">BTTM</option>
                            <option id="opt" name="dep" value="MB">MB</option>
                            <option id="opt" name="dep" value="BT">BT</option>
                        </select>
                    </div>
                </div>
                

                <div class="add1">
                    <div class="phn1">
                        <label for="Sphn">Roll no</label><br>
                        <input type="number" id="Sphn1" name="tphn" placeholder="Enter Student Roll No." >
                    </div>
    
                    <div class="sem1" >
                        <label for="Ssem">Semester</label><br>
                        <!-- <input type="text" id="Ssem1" name="Ssem" placeholder="Select Semester"> -->
                        <select name="tsem" id="Ssem1">
                            <option id="opt" hidden>Select Semester</option>
                            <option id="opt" name="sem" value="1st">1st</option>
                            <option id="opt" name="sem" value="2nd">2nd</option>
                            <option id="opt" name="sem" value="3rd">3rd</option>
                            <option id="opt" name="sem" value="4th">4th</option>
                            <option id="opt" name="sem" value="5th">5th</option>
                            <option id="opt" name="sem" value="6th">6th</option>
                            <option id="opt" name="sem" value="7th">7th</option>
                            <option id="opt" name="sem" value="8th">8th</option>
                        </select>
                    </div>
                    <!-- <div class="img1">
                        <label for="Simg">Image</label><br>
                        <input type="file" id="Simg1" name="Simg">
                    </div> -->
                    <div class="img1">
                    <label for="Simg">Image</label><br>
                    <input type="file" id="timg" name="timg">
                </div>
                </div>

                
                    <button class="submit" name="submit">Submit</button>
                
            </div>
            
        </form>
    </div>

    <script>

        var a=document.getElementById("studentbtn");
        var b=document.getElementById("teacherbtn");
        var x=document.getElementById("teacher");
        var y=document.getElementById("student");
        var ft=document.querySelector(".form");
        var st=document.querySelector(".form1");


        
        

        function teacher(){
            x.style.left="10px";
            y.style.right="-1200px";
            x.style.opacity=1;
            y.style.opacity=0;
            y.removeChild(form1);
            

        }

        function student(){
            x.style.right="-1200px";
            x.style.marginTop="40px";
            y.style.left="10px";
            x.style.opacity=0;
            y.style.opacity=1;
            x.removeChild(form);

        }
    </script>
</body>
</html>