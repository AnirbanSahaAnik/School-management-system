<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("TeacherHeader.php") ?>
      <tr>
        <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/grades.svg" alt=""></td>
            <td align="Center">
            <b>
              Student List
            </b>
            </td>
          </tr>
        <td height="150px" weight="150px">
                <ul>
                    <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="StudentList.php">View Student's Profile</a></li>
                    <li><a href="Attendance.php">Student Attendance</a></li>
                    <li><a href="Schedule.php">Class Schedule</a></li>
                    <li><a href="NoticeBoard.php">Notice Board</a></li>
                    <li><a href="UploadNotes.php">Upload Notes</a></li>
                    <li><a href="StudentListMarks.php">Student Marks</a></li>
                    <li><a href="BookHistory.php">Book History</a></li>
                    <li><a href="HomePage.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>STUDENT LIST</legend>
            <form class="" action="" method="post">
               <table border="1">
               <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Mobile No.</td>
                <td>ID</td>
                <td>Gender</td>
                <td>Date of Birth</td>
                <td>Present Address</td>
                <td>Class</td>
                <td>Section</td>
                <td>Roll</td>
               </tr>
               <tr>
                <td><a href="Marks.php">Kowshik</a></td>
                <td>kowshikchakraborty6@gmail.com</td>
                <td>01764199181</td>
                <td>4</td>
                <td>Male</td>
                <td>09/08/2010</td>
                <td>Dhaka,Bangladesh</td>
                <td>Seven</td>
                <td>A</td>
                <td>10</td>
               </tr>
               <tr>
                <td><a href="Marks.php">Anirban</a></td> 
                <td>anirban12@gmail.com</td>
                <td>01764198121</td>
                <td>5</td>
                <td>Male</td>
                <td>10/07/2010</td>
                <td>Dhaka,Bangladesh</td>
                <td>Seven</td>
                <td>A</td>
                <td>12</td>
               </tr>
               <tr>
                <td><a href="Marks.php">Kader</a></td> 
                <td>kader2@gmail.com</td>
                <td>01765198182</td>
                <td>6</td>
                <td>Male</td>
                <td>19/06/2009</td>
                <td>Dhaka,Bangladesh</td>
                <td>Seven</td>
                <td>A</td>
                <td>15</td>
               </tr>
               <tr>
                <td><a href="Marks.php">Bishowjit</a></td> 
                <td>bishowjit7@gmail.com</td>
                <td>01965197189</td>
                <td>7</td>
                <td>Male</td>
                <td>10/08/2009</td>
                <td>Dhaka,Bangladesh</td>
                <td>Seven</td>
                <td>A</td>
                <td>12</td>
               </tr>
               <tr>
                <td><a href="Marks.php">Alex</a></td>
                <td>alex@gmail.com</td>
                <td>01564799189</td>
                <td>8</td>
                <td>Male</td>
                <td>09/08/2011</td>
                <td>Dhaka,Bangladesh</td>
                <td>Six</td> 
                <td>B</td>
                <td>18</td>
               </tr>
               <tr>
                <td><a href="Marks.php">Bob</a></td> 
                <td>bob@gmail.com</td>
                <td>01865179151</td>
                <td>9</td>
                <td>Male</td>
                <td>09/08/2009</td>
                <td>Dhaka,Bangladesh</td>
                <td>Eight</td>
                <td>C</td>
                <td>10</td>
               </tr>
               </table>
            </form>
            </fieldset>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>
