<?php
	$title= "View Librarian";
	include('header.php');
	include_once('../model/librarianModel.php');
	$UsersList = allUserList();
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
								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
										<td>Id</td>
										<td>Name</td>
										<td>Email</td>
										<td>Mobile</td>
										<td>Gender</td>
										<td>DOB</td>
										<td>Action</td>
								</tr>";
								for($i = 0; $i<count($UsersList); $i++){
										echo "<tr align = 'center'>
										<td>{$UsersList[$i]['id']}</td>
										<td>{$UsersList[$i]['name']}</td>
										<td>{$UsersList[$i]['email']}</td>
										<td>{$UsersList[$i]['mobile']}</td>
										<td>{$UsersList[$i]['gender']}</td>
										<td>{$UsersList[$i]['dob']}</td>
										<td> <a href='editLibrarian.php?id={$UsersList[$i]['id']}'> Edit </a> | <a href='deleteLibrarian.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
								</tr>";
								}
								echo "</table>";
								?>

              </td>
            </tr>
          </table>
        </td>
      </tr>




    <?php include('footer.php'); ?>
