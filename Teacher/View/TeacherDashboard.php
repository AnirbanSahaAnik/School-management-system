<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
    <?php include("../Controller/TeacherHeader.php") ?>
      <tr>
         <tr>
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Teacher.jpg" alt=""></td>
            <td align="Left">
            <b>
              Logged in as<br><br>
              <a href="ViewProfile.php">Username</a><br>
              (Teacher)
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
                    <li><a href="HomePage.html">Logout</a></li>
                </ul>

        </td>
        <td><h1>Welcome</h1></td>
      </tr>
      <?php include("../Controller/TeacherFooter.php") ?>
    </table>

  </body>
</html>
