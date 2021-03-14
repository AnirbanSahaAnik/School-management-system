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
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Student.jpg" alt=""></td>
            <td align="Center">
            <b>
              Student's Profile Information
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
                <legend>STUDENT PROFILE</legend>
            <form class="" action="" method="post">
               <table>
               <tr>
                <td>Name</td>
                <td>:</td>
               </tr>
               <tr>
                <td>Email</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Mobile No.</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>ID</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Gender</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Date of Birth</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Present Address</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Class</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Section</td> 
                <td>:</td>
               </tr>
               <tr>
                <td>Roll No.</td> 
                <td>:</td>
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
