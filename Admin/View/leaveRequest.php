<?php
	$title= "leaveRequest";
	include('header.php');
?>
                <ul>
                  <li><a href="leaveRequest.php">Student's leave request</a></li>

                </ul>
              </td>

              <td>
                <form  class="" action="regCheckCourse.php" method="post">
                  <fieldset >
                    <legend>Student's leave request</legend>
                    <table width="100%" border="1">
                      <tr align="center" >
                        <td>ID</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>section</td>
                        <td>Roll</td>
                        <td>Action</td>

                      </tr>

                      <tr align="center">
                        <td>4001</td>
                        <td>a</td>
                        <td>Six</td>
                        <td>A</td>
                        <td>1</td>
                        <td>Accepted</td>

                      </tr>

                      <tr align="center">
                        <td>4002</td>
                        <td>b</td>
                        <td>Six</td>
                        <td>B</td>
                        <td>2</td>
                        <td>Rejected</td>

                      </tr>

                      <tr align="center">
                        <td>4101</td>
                        <td>ab</td>
                        <td>Seven</td>
                        <td>A</td>
                        <td>1</td>
                        <td>Accepted</td>

                      </tr>

                      <tr align="center">
                        <td>4102</td>
                        <td>bc</td>
                        <td>Seven</td>
                        <td>B</td>
                        <td>2</td>
                        <td>Accepted</td>

                      </tr>


                    </table>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>




      <?php include('footer.php'); ?>
