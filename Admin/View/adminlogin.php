<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
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
                <a href="../../Home/index.html">Back</a>

              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table align="center" >
            <tr>
              <td>
                <form class="" action="../Controller/logCheck.php" method="post">
                  <fieldset>
                    <legend>LOGIN</legend>
                    <table>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" name="password" value=""></td>
                      </tr>
                    </table>
                    <input type="checkbox" name="" value=""> Remember Me <br>
                    <br>
                    <input type="submit" name="submit" value="LOGIN">
                    <a href="ForgotPassword.html">Forgot Password?</a>
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
