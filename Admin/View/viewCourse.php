<?php
	$title= "view course";
	include('header.php');
?>
                <ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>

                </ul>
              </td>

              <td>
                <center><h2>Course list</h2></center>

                <table width="100%" border="1">
                  <tr align="center" >
                    <td>Name</td>
                    <td>Class</td>
                    <td>Action</td>
                  </tr>

                  <tr align="center">
                    <td>Bangla</td>
                    <td>Six</td>
                    <td>
            					<a href="updateCourse.php?id=1">Update</a> |
            					<a href="deleteCourse.php?id=1">DELETE</a>

            				</td>
                  </tr>

                  <tr align="center">
                    <td>English</td>
                    <td>Six</td>
                    <td>
            					<a href="updateCourse.php?id=2">Update</a> |
            					<a href="deleteCourse.php?id=2">DELETE</a>

            				</td>
                  </tr>

                  <tr align="center">
                    <td>Math</td>
                    <td>Six</td>
                    <td>
            					<a href="updateCourse.php?id=3">Update</a> |
            					<a href="deleteCourse.php?id=3">DELETE</a>

            				</td>
                  </tr>

                  <tr align="center">
                    <td colspan="4"><a href="#">See More</a></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>




      <?php include('footer.php'); ?>
