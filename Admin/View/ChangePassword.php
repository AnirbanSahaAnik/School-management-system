<?php
	$title= "Change Password";
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
								<form class="" action="../controller/chaPassCheck.php" method="post">
			            <fieldset>
			              <legend>CHANGE PASSWORD</legend>
			              <table>
			                <tr>
			                  <td>Current Password:</td>
			                  <td><input type="password" name="cpas" value=""></td>
			                </tr>
			                <tr>
			                  <td>New Password:</td>
			                  <td><input type="password" name="npass" value=""></td>
			                </tr>
			                <tr>
			                  <td>Retype New Password:</td>
			                  <td><input type="password" name="rnpass" value=""></td>
			                </tr>
			              </table>
			              <hr>
			              <input type="submit" name="Change" value="Change"> <br>
			            </fieldset>
			          </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>


  <?php include('footer.php'); ?>
