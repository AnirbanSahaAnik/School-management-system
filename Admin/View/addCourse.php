<?php
	$title= "Dashbord";
	include('header.php');
?>
                <ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>
                </ul>
              </td>

              <td>
                <form  class="" action="../Controller/addCheckCourse.php" method="post">
                  <fieldset >
                    <legend>Create Course</legend>
                      <table align="center">
                        <tr>
                          <td>Course Name</td>
                          <td>:<input type="text" name="name" placeholder=""></td>
                        </tr>
                        <tr>
                          <td>Class</td>
                          <td>:<select name="class">
                              <option value="Six">Six</option>
                              <option value="Seven">Seven</option>
                              <option value="Eight">Eight</option>
                              <option value="Nine">Nine</option>
                              <option value="Ten">Ten</option>
                            </select>
                          </td>
                        <tr>
                          <td>Description</td>
                          <td>:<textarea name="description" rows="3" cols="20"></textarea></td>
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
