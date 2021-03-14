<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>


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
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Book.jpg" alt=""></td>
            <td align="Center">
            <b>
              Book Arrival List
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
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>LIST OF BOOKS</legend>
            <form class="" action="" method="post">
               <table border="1">
               <tr>
                <td>Name</td>
                <td>  Author</td>
                <td>  Arrival Time</td>
               </tr>
               <tr>
                <td>Let Us C</td> 
                <td>Herbert Schildt</td>
                <td>14/03/21</td>
               </tr>
               <tr>
                <td>Let Us C++</td> 
                <td>Herbert Schildt</td>
                <td>14/03/21</td>
               </tr>
               <tr>
                <td>Learn PHP</td> 
                <td>Kowshik Chakraborty</td>
                <td>14/03/21</td>
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


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
