<?php
	$title= "Update Student";
	include('header.php');
	include_once('../model/studentModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
                <ul>
                  <li><a href="addStudent.php">Add Student</a></li>
                  <li><a href="viewStudent.php">View Student</a></li>
                  <li><a href="editrequestStudent.php">Edit Request</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>

                </ul>
              </td>
              <td>
                <form action="../controller/updateCheckStudent.php" method="post">

                <fieldset>
                  <legend>Update Information</legend>
                    <table align="center">
                      <tr>
                        <td>Id</td>
                        <td>:<input type="text" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td>:<input type="text" name="name" value="<?php echo $updatemyinfo['name']; ?>" placeholder="Enter Full Name"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:<input type="email" name="email" value="<?php echo $updatemyinfo['email']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Mobile No</td>
                        <td>:<input type="number" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>"></td>
                      </tr>


                      <tr>
                        <td>Gender</td>
                        <td>
                          :<input type="radio" name="gender" <?php  if($updatemyinfo['gender']=="male"){?> checked="true" <?php } ?> value="male">Male
                          <input type="radio" name="gender"  <?php if($updatemyinfo['gender']=="female"){?> checked="true" <?php } ?>  value="female">Female
                          <input type="radio" name="gender" <?php if($updatemyinfo['gender']=="other"){?> checked="true" <?php } ?> value="other">Other
                        </td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>:<input type="date" name="dob" value="<?php echo $updatemyinfo['dob']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Present Address</td>
                        <td>:<input type="text" name="p_address" value="<?php echo $updatemyinfo['p_address']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Class</td>
                        <td>:<select name="class">
                            <option <?php  if($updatemyinfo['class']=="Six"){?> selected="true" <?php } ?> value="Six">Six</option>
                            <option <?php  if($updatemyinfo['class']=="Seven"){?> selected="true" <?php } ?> value="Seven">Seven</option>
                            <option <?php  if($updatemyinfo['class']=="Eight"){?> selected="true" <?php } ?> value="Eight">Eight</option>
                            <option <?php  if($updatemyinfo['class']=="Nine"){?> selected="true" <?php } ?> value="Nine">Nine</option>
                            <option <?php  if($updatemyinfo['class']=="Ten"){?> selected="true" <?php } ?> value="Ten">Ten</option>
                          </select>
                        </td>
                      </tr>

                      <tr>
                        <td>Section</td>
                        <td>:<select name="section">
                            <option <?php  if($updatemyinfo['section']=="A"){?> selected="true" <?php } ?> value="A">A</option>
                            <option <?php  if($updatemyinfo['section']=="B"){?> selected="true" <?php } ?> value="B">B</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Roll No</td>
                        <td>:<input type="number" name="roll" value="<?php echo $updatemyinfo['roll']; ?>"></td>
                      </tr>
                    </table>
                    <hr>
                    <center>
                      <input type="submit" name="update" value="Update">

                  </center>
                </fieldset>







            </td>
            </tr>
            </table>
            </td>
            </tr>




            <?php include('footer.php'); ?>
