<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher</title>
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
                  <li><a href="addLibrarian.php">Add Librarian</a></li>
                  <li><a href="viewLibrarian.php">View Librarian</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>

                </ul>
              </td>

              <td>
                <center><h2>Librarian list</h2></center>

                <table width="100%" border="1">
                  <tr align="center" >
                    <td>ID</td>
                    <td>Name</td>
                    <td>Action</td>
                  </tr>

                  <tr align="center">
                    <td>6001</td>
                    <td>Kader</td>
                    <td>
            					<a href="editLibrarian.php?id=a">EDIT</a> |
            					<a href="deleteLibrarian.php?id=1">DELETE</a> |
                      <a href="blockLibrarian.php?id=1">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>6002</td>
                    <td>Kowhisk</td>
                    <td>
            					<a href="editLibrarian.php?id=2">EDIT</a> |
            					<a href="deleteLibrarian.php?id=2">DELETE</a> |
                      <a href="blockLibrarian.php?id=2">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>6003</td>
                    <td>Bishowjit</td>
                    <td>
            					<a href="editLibrarian.php?id=2">EDIT</a> |
            					<a href="deleteLibrarian.php?id=2">DELETE</a> |
                      <a href="blockLibrarian.php?id=2">BLOCK</a>
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
