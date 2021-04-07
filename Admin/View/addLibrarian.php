<?php
	$title= "add librarian";
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
                <form  class="" action="../Controller/regCheckLibrarian.php" method="post">
                  <fieldset >
                    <legend>REGESTRATION</legend>
                      <table align="center">
                        <tr>
                          <td>Name</td>
                          <td>:<input type="text" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:<input type="email" name="email" value=""></td>
                        </tr>
                        <tr>
                          <td>Mobile No</td>
                          <td>:<input type="number" name="mobile" value=""></td>
                        </tr>
                        <tr>
                          <td>Id</td>
                          <td>:<input type="text" name="id" value=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>:<input type="password" name="password" value=""></td>
                        </tr>
                        <tr>
                          <td>Confirm Password</td>
                          <td>:<input type="password" name="repass" value=""></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td>
                            :<input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>:<input type="date" name="dob" value=""></td>
                        </tr>

                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>




      <?php include('footer.php'); ?>
