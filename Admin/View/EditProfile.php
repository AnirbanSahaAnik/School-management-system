<?php
	$title= "Edit Profile";
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
								<form class="" action="../Controller/editadminCheck.php" method="post">
								<table>
									<tr>
										<td>ID</td>
										<td>: <input type="text" name="id" value="<?php $Username = json_decode(file_get_contents('../Model/admin.json')); echo $Username->id;  ?>"></td>
									</tr>
									<tr>
										<td>Name</td>
										<td>: <input type="text" name="name" value="<?php $Username = json_decode(file_get_contents('../Model/admin.json')); echo $Username->name;  ?>"></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: <input type="email" name="email" value="<?php $Username = json_decode(file_get_contents('../Model/admin.json')); echo $Username->email;  ?>"></td>
									</tr>

								</table>
								<hr>
									<input type="submit" name="submit" value="Submit">
								</form>


              </td>
            </tr>
          </table>
        </td>
      </tr>




<?php include('footer.php'); ?>
