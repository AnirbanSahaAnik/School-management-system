<?php
	$title= "view profile";
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
								<table>
									<tr>
										<td>ID</td>
										<td>: <?php $Username = json_decode(file_get_contents('../Model/admin.json')); echo $Username->id;  ?></td>
									</tr>
									<tr>
										<td>Name</td>
										<td>: <?php $Username = json_decode(file_get_contents('../Model/admin.json')); echo $Username->name;  ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: <?php $Username = json_decode(file_get_contents('../Model/admin.json')); echo $Username->email;  ?></td>
									</tr>
								</table>
								<hr>
								<br>
								<a href="EditProfile.php">Edit Profile</a>


              </td>
            </tr>
          </table>
        </td>
      </tr>




      <?php include('footer.php'); ?>
