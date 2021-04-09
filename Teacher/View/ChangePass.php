<?php
	session_start();
	if(isset($_COOKIE['flag']))
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
            <td align="Left"><img height="80px" weight="80px" src="../Resources/password.webp" alt=""></td>
            <td align="Center">
            <b>
              Password Change
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
                    <li><a href="ChangePass.php">Reset Password</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>PASSWORD CHANGE</legend>
            <form class="" action="../Controller/ChangePassCheck.php" method="post">
               <table border="1">
			   <tr>
			                  <td>Current Password:</td>
			                  <td><input type="password" name="password" value=""></td>
			                </tr>
			                <tr>
			                  <td>New Password:</td>
			                  <td><input type="password" name="newpassword" value=""></td>
			                </tr>
			                <tr>
			                  <td>Retype New Password:</td>
			                  <td><input type="password" name="repassword" value=""></td>
			                </tr>
               </table>
			             <hr>
			              <input type="submit" name="Change" value="Change"> <br>
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

