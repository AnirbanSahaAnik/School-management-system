<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notice</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="dashboard.php">Back</a> |
                <a href="../Controller/logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="1">
            <tr>
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>User name</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
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




      <tr>
        <td align="center" >Copyright Ⓒ 2021</td>
      </tr>

    </table>

  </body>
</html>
