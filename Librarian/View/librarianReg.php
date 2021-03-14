<?php $title= "Librarian Registration Page";
	include('header.php');
   ?>
   
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="homepage.php">Homepage</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <form action="../Controller/librarianRegCheck.php" method="POST">
            <fieldset>
              <legend>REGESTRATION</legend>
                <table  align="center">
                  <tr>
                    <td>Email Address</td>
                    <td>: <input type="email" name="mail" value="" ></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" placeholder="Academic Name"></td>
                  </tr>
                  <tr>
                    <td>Id</td>
                    <td>: <input type="text" name="username" value=""></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>
                      : <input type="radio" name="gender" value="male">Male
                      <input type="radio" name="gender" value="female">Female
                    </td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>: <input type="date" name="dob" value=""></td>
                  </tr>
                  <tr>
                    <td>Present Address</td>
                    <td>: <input type="text" name="address" value=""></td>
                  </tr>
                  <tr>
                    <tr>
                        <td>Choose a Password</td>
                        <td>: <input type="password" name="password" value=""></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" name="cpassword" value=""></td>
                      </tr>
                    <td colspan="2"><input type="checkbox" name="policy" value=""><b>Yes</b>,I'll maintain privacy & policy.</td>
                  </tr>
                <tr>
                    <td><input type="submit" name="register" value="Registration"></td>
                    <td><input type="reset" name="reset" value="Reset"></td>
                </tr>
                </table>
            </fieldset>
          </form>
        </td>
      </tr>
      <?php include('footer.php'); ?>   