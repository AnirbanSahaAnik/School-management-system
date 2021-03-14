<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="90%" >
      <tr>
        <td>
            <table width="100%">
                <tr>
                  <td><img height="40px" weight="40px" src="../Resources/school_logo.png" alt=""></td>
                  <td align = "right">
                      <a href="HomePage.php">Home</a>|
                      <a href="LoginPage.php">Login</a>|
                      <a href="Registration.php">Registration</a>
                  </td>
                </tr>
            </table>
          </td>
      </tr>
      <tr>
        <td height="150px" weight="150px" colspan="2">
            <!DOCTYPE html>
<html>
    <head>
        <title>HTML Site</title>
    </head>
    <body>
         <table align="center">
             <tr>
                <td></td>
                <td>
                    <form method="post" action="../Controller/RegCheck.php"> 
                        <fieldset width="5px">
                            <legend>REGISTRATION</legend>
                          <table width="100.7%" height="100px" align="center">
                              <tr>
                                  <td width="30%" height="30px">Name</td>
                                  <td width="60%" height="30px">:<input type="text" name="name" value=""></td>
                              </tr>
                             
                              <tr>
                                <td width="30%" height="30px">Email</td>
                                <td width="60%" height="30px">:<input type="email" name="email" value=""></td>
                            </tr>

                             <tr>
                                  <td width="30%" height="30px">Mobile No.</td>
                                  <td width="60%" height="30px">:<input type="text" name="mobile" value=""></td>
                              </tr>

                              <tr>
                                  <td width="30%" height="30px">ID</td>
                                  <td width="60%" height="30px">:<input type="text" name="ID" value=""></td>
                              </tr>

                              <tr>
                                <td width="30%" height="30px">Password</td>
                                <td width="60%" height="30px">:<input type="password" name="password"></td>
                             </tr>
                    
                            <tr>
                                <td width="30%" height="30px">Confirm Password</td>
                                <td width="60%" height="30px">:<input type="password" name="confirm"></td>
                            </tr>
                           
                              <tr>
                                <td width="30%" height="30px">
                                <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Other">Other
                                </fieldset>
                                </td>
                            </tr>
                            
                            <tr>
                                <td width="79%">
                                <fieldset>
                                <legend>Date of Birth</legend>
                                <input type="text" name="dob" value=""> / <input type="text" name="dob1" value=""> / <input type="text" name="dob2" value="">(dd/mm/yyyy)
                                </fieldset>
                                </td>
                            </tr>
                             <tr>
                                  <td width="30%" height="30px">Present Address</td>
                                  <td width="60%" height="30px">:<input type="text" name="address" value=""></td>
                              </tr>
                            <tr>
                                <td><hr></td>
                            </tr>
                            <tr>
                                <td height="30px" align="center" colspan="3"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td>
                            </tr>
                          </table>
                        </fieldset>
                        </form>
                </td>
                <td></td>
             </tr>
         </table>
    </body>
</html>
        </td>
      </tr>
      <?php include("TeacherFooter.php") ?>
    </table>

  </body>
</html>