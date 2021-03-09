<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
      <tr>
         <td colspan="2">
          <table width="100%">
              <tr>
                <td><img height="40px" weight="40px" src="logo.png" alt=""></td>
                <td align = "right">
                    Logged in as
                    <a href="ViewProfile.php"></a>|
                    <a href="UserLogout.php">Logout</a>
                </td>
              </tr>
          </table>
          </td>
      </tr>
      <tr>
        <td height="150px" weight="150px">
            <b>Account</b>
            <hr>
                <ul>
                    <li><a href="TeacherDashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="EditProfile.php">View Student's Profile</a></li>
                    <li><a href="ViewProfile.php">Student Attendance</a></li>
                    <li><a href="ProfilePic.php">Class Schedule</a></li>
                    <li><a href="ChangePass.php">Notice Board</a></li>
                    <li><a href="ViewProfile.php">Upload Notes</a></li>
                    <li><a href="ViewProfile.php">Student Marks</a></li>
                    <li><a href="ViewProfile.php">Book History</a></li>
                    <li><a href="UserLogout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>PROFILE</legend>
            <form class="" action="" method="post">
               <table>
               <tr>
                <td>Name</td>
                <td>:</td>
                <td rowspan="4"><img height="60px" weight="60px" src="user.png" alt=""><br><a href="ProfilePic.php">Change</a></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Email</td> 
                <td>:</td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Gender</td> 
                <td>:</td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Date of Birth</td> 
                <td>:</td>
               </tr>
               </table>
                <hr>
                <a href="EditProfile.php">Edit Profile</a>
            </form>
            </fieldset>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">Copyright Ⓒ 2017</td>
      </tr>
    </table>

  </body>
</html>
