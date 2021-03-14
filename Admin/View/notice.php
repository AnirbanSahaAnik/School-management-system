<?php
	$title= "notice";
	include('header.php');
?>
                <ul>
                  <li><a href="notice.php">Notice</a></li>

                </ul>
              </td>

              <td>
                <form  class="" action="regCheckCourse.php" method="post">
                  <fieldset >
                    <legend>Notice</legend>
                      <table align="center">
                        <tr>
                          <td>
                            <textarea name="name" rows="8" cols="80" placeholder="Enter notice Here"></textarea>
                          </td>
                        </tr>

                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">

                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>



<?php include('footer.php'); ?>
