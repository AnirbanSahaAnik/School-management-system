<?php
	$title= "Dashbord";
	include('header.php');
?>
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
                      <a href="loginHistory.php"><img height="100px" weight="100px" src="../Resources/loginhistory.jpg" alt=""></a>
                      <br>
                      <a href="loginHistory.php">Login History</a>
                    </td>

                    <td align = "center">
                      <a href="sixAtt.php"><img height="100px" weight="100px" src="../Resources/attendance.jpg" alt=""></a>
                      <br>
                      <a href="sixAtt.php">Attendance List</a>
                    </td>

                    <td align = "center">
                      <a href="libraryBook.php"><img height="100px" weight="100px" src="../Resources/libraryBook.jpg" alt=""></a>
                      <br>
                      <a href="libraryBook.php">Library Book Details</a>
                    </td>

                    <td align = "center">
                      <a href="classRoutine.php"><img height="100px" weight="100px" src="../Resources/routine.jpg" alt=""></a>
                      <br>
                      <a href="classRoutine.php">Class Routine</a>
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

<?php include('footer.php'); ?>
