<?php
	$title= "View Librarian";
	include('header.php');
?>

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
            					<a href="editLibrarian.php?id=1">EDIT</a> |
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
            					<a href="editLibrarian.php?id=3">EDIT</a> |
            					<a href="deleteLibrarian.php?id=3">DELETE</a> |
                      <a href="blockLibrarian.php?id=3">BLOCK</a>
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




    <?php include('footer.php'); ?>
