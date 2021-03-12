<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student</title>
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
                  <li><a href="addStudent.php">Add Student</a></li>
                  <li><a href="viewStudent.php">View Student</a></li>
                    <li><a href="editrequestStudent.php">Edit Request</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>

                </ul>
              </td>

              <td>
                <center><h2>Student list</h2></center>

                <table width="100%" border="1">
                  <tr align="center" >
                    <td>ID</td>
                    <td>Name</td>
                    <td>Class</td>
                    <td>section</td>
                    <td>Roll</td>
                    <td>Action</td>
                  </tr>

                  <tr align="center">
                    <td>4001</td>
                    <td>a</td>
                    <td>Six</td>
                    <td>A</td>
                    <td>1</td>
                    <td>
            					<a href="editStudent.php?id=1">EDIT</a> |
            					<a href="Controller/deleteStudent.php?id=1">DELETE</a> |
                      <a href="Controller/blockStudent.php?id=1">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>4002</td>
                    <td>b</td>
                    <td>Six</td>
                    <td>B</td>
                    <td>2</td>
                    <td>
            					<a href="editStudent.php?id=2">EDIT</a> |
            					<a href="Controller/deleteStudent.php?id=2">DELETE</a> |
                      <a href="Controller/blockStudent.php?id=2">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>4101</td>
                    <td>ab</td>
                    <td>Seven</td>
                    <td>A</td>
                    <td>1</td>
                    <td>
            					<a href="editStudent.php?id=3">EDIT</a> |
            					<a href="Controller/deleteStudent.php?id=3">DELETE</a> |
                      <a href="Controller/blockStudent.php?id=3">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>4102</td>
                    <td>bc</td>
                    <td>Seven</td>
                    <td>B</td>
                    <td>2</td>
                    <td>
            					<a href="editStudent.php?id=4">EDIT</a> |
            					<a href="Controller/deleteStudent.php?id=4">DELETE</a> |
                      <a href="Controller/blockStudent.php?id=4">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>4201</td>
                    <td>abc</td>
                    <td>Eight</td>
                    <td>A</td>
                    <td>1</td>
                    <td>
            					<a href="editStudent.php?id=5">EDIT</a> |
            					<a href="Controller/deleteStudent.php?id=5">DELETE</a> |
                      <a href="Controller/blockStudent.php?id=5">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>4202</td>
                    <td>def</td>
                    <td>Eight</td>
                    <td>B</td>
                    <td>2</td>
                    <td>
            					<a href="editStudent.php?id=6">EDIT</a> |
            					<a href="Controller/deleteStudent.php?id=6">DELETE</a> |
                      <a href="Controller/blockStudent.php?id=6">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td colspan="6"><a href="#">See More</a></td>
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
