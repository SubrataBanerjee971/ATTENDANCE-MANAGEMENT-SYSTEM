<?php

session_start();
include "connection.php";

if(isset($_POST['submit']))
{
  $subjectname=$_POST['sub_name'];
  $subjectcode=$_POST['sub_code'];
  $date=$_POST['sub_date'];
  $depertment=$_POST['sub_dept'];
  $semester=$_POST['sub_sem'];


  $sql="INSERT INTO routine SET sub_name='$subjectname',sub_code='$subjectcode',date='$date',semester='$semester',department='$depertment'";
  if($conn->query($sql))
  {
    header("Location:routine.php");
    

  }
  else
  {
    echo "something went wrong";
  }
}

?>





<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <!-- <link rel="stylesheet" href="style.css" /> -->

    <style>
        /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
    </style>
  </head>
  <body>
    <section class="container">
      <header>Creat Routine</header>
      <form action="creat_routine.php" class="form" method="post">
        <div class="input-box">
          <label>Subject Name</label>
          <input type="text" name="sub_name" placeholder="Enter subject name" required />
        </div>

        <div class="input-box">
          <label>Subject Code</label>
          <input type="text" name="sub_code" placeholder="Enter subject code" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>class Date</label>
            <input type="date" name="sub_date" placeholder="" required />
          </div>
        </div>
        
        <div class="input-box address">
          <div class="column">
            <div class="select-box">
              <select name="sub_dept" >
                <option hidden>Department</option>
                <option name="sub_dept" value="BCA" >BCA</option>
                <option name="sub_dept" value="BBA" >BBA</option>
                <option name="sub_dept" value="MSC" >MSC</option>
                <option name="sub_dept" value="MB" >MB</option>
              </select>
            </div>
            <div class="select-box">
              <select name="sub_sem">
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
        <button name="submit">Submit</button>
      </form>
    </section>
  </body>
</html>