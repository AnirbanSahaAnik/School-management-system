<?php
	$title= "notice";
	include('header.php');
?>
                <ul>
                  <li><a href="postNotice.php">Notice</a></li>
									<li><a href="viewNotice.php">View Notice</a></li>
                </ul>
              </td>
              <td>
                <form  class="" action="../Controller/postCheckNotice.php" method="post">
                  <fieldset >
                    <legend>Notice</legend>
                      <table align="center">
                        <tr>
                          <td>
                            <textarea name="notice" rows="8" cols="80" placeholder="Enter notice Here"></textarea>
                          </td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="POST">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>



<?php include('footer.php'); ?>
