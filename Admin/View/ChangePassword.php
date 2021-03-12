<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
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
                  <li><a href="Dashboard.php">Dashbord</a></li>
                  <li><a href="viewProfile.php">View Profile</a></li>
                  <li><a href="EditProfile.php">Edit Profile</a></li>
                  <li><a href="ChangePassword.php">Change Password</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>
                </ul>
              </td>

              <td>
								<form class="" action="" method="post">
			            <fieldset>
			              <legend>CHANGE PASSWORD</legend>
			              <table>
			                <tr>
			                  <td>Current Password:</td>
			                  <td><input type="password" name="c_pass" value=""></td>
			                </tr>
			                <tr>
			                  <td>New Password:</td>
			                  <td><input type="password" name="n_pass" value=""></td>
			                </tr>
			                <tr>
			                  <td>Retype New Password:</td>
			                  <td><input type="password" name="rn_pass" value=""></td>
			                </tr>
			              </table>
			              <hr>
			              <input type="submit" name="submit" value="Submit"> <br>
			            </fieldset>
			          </form>
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
