<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Course</title>
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
                <a href="dashboard.php">Back</a> |
                <a href="../Controller/logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="1">
            <tr>
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>User name</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
                <ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>

                </ul>
              </td>

              <td>
                <center><h2>Course list</h2></center>

                <table width="100%" border="1">
                  <tr align="center" >
                    <td>Name</td>
                    <td>Class</td>
                    <td>Action</td>
                  </tr>

                  <tr align="center">
                    <td>Bangla</td>
                    <td>Six</td>
                    <td>
            					<a href="updateCourse.php?id=1">Update</a> |
            					<a href="deleteCourse.php?id=1">DELETE</a>

            				</td>
                  </tr>

                  <tr align="center">
                    <td>English</td>
                    <td>Six</td>
                    <td>
            					<a href="updateCourse.php?id=2">Update</a> |
            					<a href="deleteCourse.php?id=2">DELETE</a>

            				</td>
                  </tr>

                  <tr align="center">
                    <td>Math</td>
                    <td>Six</td>
                    <td>
            					<a href="updateCourse.php?id=3">Update</a> |
            					<a href="deleteCourse.php?id=3">DELETE</a>

            				</td>
                  </tr>

                  <tr align="center">
                    <td colspan="4"><a href="#">See More</a></td>
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
