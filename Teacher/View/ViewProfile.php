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
            <td align="Left"><img height="80px" weight="80px" src="../Resources/Teacher.jpg" alt=""></td>
            <td align="Left">
            <b>
              Logged in as<br><br>
              <a href="ViewProfile.php"><?php $userr = $_SESSION['current_user']; $name= $userr['name']; echo "$name"; ?></a><br>
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
                    <li><a href="ViewProfile.php">Student Marks</a></li>
                    <li><a href="ViewProfile.php">Book History</a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>PROFILE</legend>
            <form class="" action="" method="post">
               <table>
               <tr>
                <td>Name</td>
                <td>:<?php $userr = $_SESSION['current_user']; $name= $userr['name']; echo "$name"; ?></td>
                <td rowspan="4"><img height="60px" weight="60px" src="user.png" alt=""><br><a href="ProfilePic.php">Change</a></td>
               </tr>
               <tr>
                <td>Email</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $email= $userr['email']; echo "$email"; ?></td>
               </tr>
               <tr>
                <td>Mobile No.</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $mobile= $userr['mobile']; echo "$mobile"; ?></td>
               </tr>
               <tr>
                <td>ID</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $ID= $userr['ID']; echo "$ID"; ?></td>
               </tr>
               <tr>
                <td>Gender</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $gender= $userr['gender']; echo "$gender"; ?></td>
               </tr>
               <tr>
                <td>Date of Birth</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $dob= $userr['dob']; echo "$dob"; ?>/<?php $userr = $_SESSION['current_user']; $dob1= $userr['dob1']; echo "$dob1"; ?>/<?php $userr = $_SESSION['current_user']; $dob2= $userr['dob2']; echo "$dob2"; ?></td>
               </tr>
               <tr>
                <td>Present Address</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $address= $userr['address']; echo "$address"; ?></td>
               </tr>
               </table>
                <hr>
                <a href="EditProfile.php">Edit Profile</a>
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
