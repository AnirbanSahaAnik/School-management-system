<?php
	$title= "Update Notice";
	include('header.php');
	include_once('../model/noticeModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
                <ul>
                  <li><a href="postNotice.php">Notice</a></li>
                  <li><a href="viewNotice.php">View Notice</a></li>
                </ul>
              </td>
              <td>
                <form action="../controller/updateCheckNotice.php" method="post">

                  <fieldset >
                    <legend>Notice</legend>
                      <table align="center">
                        <tr>
                          <td>
                            <textarea name="notice" rows="8" cols="80" placeholder="Enter notice Here"><?php echo $updatemyinfo['notice']; ?></textarea>
                          </td>
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
