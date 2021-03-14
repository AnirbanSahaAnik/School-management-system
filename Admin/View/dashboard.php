<?php
	session_start();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="../Controller/logout.php">Logout</a>

              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="0">
            <tr>
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>User name</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
                <ul>
                  <li><a href="Dashboard.php">Dashbord</a></li>
                  <li><a href="viewProfile.php">View Profile</a></li>
                  <li><a href="EditProfile.php">Edit Profile</a></li>
                  <li><a href="ChangePassword.php">Change Password</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>
                </ul>
              </td>

              <td>
                <table border="1" width ="100%" cellspacing="0">
                  <tr>
                    <td align = "center">
                      <a href="addTeacher.php"><img height="100px" weight="100px" src="../Resources/Teacher.jpg" alt=""></a>
                      <br>
                      <a href="addTeacher.php">Teacher</a>
                    </td>

                    <td align = "center">
                      <a href="addStudent.php"><img height="100px" weight="100px" src="../Resources/student.jpg" alt=""></a>
                      <br>
                      <a href="addStudent.php">Student</a>
                    </td>

                    <td align = "center">
                      <a href="addLibrarian.php"><img height="100px" weight="100px" src="../Resources/librarian.jpg" alt=""></a>
                      <br>
                      <a href="addLibrarian.php">Librarian</a>
                    </td>

                    <td align = "center">
                      <a href="notice.php"><img height="100px" weight="100px" src="../Resources/notice.jpg" alt=""></a>
                      <br>
                      <a href="notice.php">Notice Board</a>
                    </td>

                  </tr>

                  <tr>
                    <td align = "center">
                      <img height="100px" weight="100px" src="../Resources/loginhistory.jpg" alt="">
                      <br>
                      <a href="#">Login History</a>
                    </td>

                    <td align = "center">
                      <img height="100px" weight="100px" src="../Resources/attendance.jpg" alt="">
                      <br>
                      <a href="#">Attendance List</a>
                    </td>

                    <td align = "center">
                      <a href="libraryBook.php"><img height="100px" weight="100px" src="../Resources/libraryBook.jpg" alt=""></a>
                      <br>
                      <a href="libraryBook.php">Library Book Details</a>
                    </td>

                    <td align = "center">
                      <img height="100px" weight="100px" src="../Resources/routine.jpg" alt="">
                      <br>
                      <a href="#">Class Routine</a>
                    </td>
                  </tr>

                  <tr>
                    <td align = "center">
                      <a href="leaveRequest.php"><img height="100px" weight="100px" src="../Resources/leaverequest.png" alt=""></a>
                      <br>
                      <a href="leaveRequest.php">Leave Request</a>
                    </td>

                    <td align = "center">
                      <a href="addCourse.php"><img height="100px" weight="100px" src="../Resources/course.jpg" alt=""></a>
                      <br>
                      <a href="addCourse.php">Courses</a>
                    </td>

                    <td align = "center">

                    </td>

                    <td align = "center">

                    </td>
                  </tr>



                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>




      <tr>
        <td align="center" >Copyright Ⓒ 2021</td>
      </tr>

    </table>

  </body>
</html>

<?php

	}else{
		header('location: adminlogin.php');
	}

?>
