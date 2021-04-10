<?php
$title= "Dashboard";
include('header.php');
?>

<?php include('sideBar.php'); ?> 


              <td>
								<form class="" action="../controller/passCheck.php" method="post">
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
			<?php include('footer.php'); ?>