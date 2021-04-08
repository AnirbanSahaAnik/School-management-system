<?php
	$title= "Update teacher";
	include('header.php');
	include_once('../model/teacherModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
                <ul>
                  <li><a href="addTeacher.php">Add Teacher</a></li>
                  <li><a href="viewTeacher.php">View Teacher</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>

                </ul>
              </td>
              <td>
                <form action="../controller/updateCheckTeacher.php" method="post">

                <fieldset>
                  <legend>Update Information</legend>
                    <table align="center">
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
                        <td>Id</td>
                        <td>:<input type="text" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
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
