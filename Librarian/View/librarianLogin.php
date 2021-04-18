<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
        .error{
            border: 2px solid red;
        }
        .success{
            border: 2px solid green;
        }
    </style>
</head>
<body> 
<script>
  function Librarianlogin(){
    var Librarianid = document.getElementById('librarianid').value;
    var Password = document.getElementById('password').value;
    var msg="";
    if(Librarianid==""){
                msg+="please enter Librarian ID";
                librarianid.className="error";
            }
            if(Password==""){
                msg+="please Enter Password";
                password.className="error";
            }
            if(msg==""){
                return true;
            }
            else{
                document.getElementById('msg1').innerHTML = "please enter Librarian ID";
                document.getElementById('msg2').innerHTML = "please Enter Password";
                return false;
            }
  }
  
  function validation(){
  var Librarianid = document.getElementById('librarianid').value;
  var Password = document.getElementById('password').value;
  if(Librarianid!="" && Librarianid.length == 3){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('librarianid').className="success";
            }
            if(Password!="" && Password.length == 7){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('password').className="success";
            }

}
</script>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="homepage.php">Homepage</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table align="center">
            <tr>
              <td>
                <form class="" action="../Controller/librarianLogCheck.php" method="POST" onsubmit="return Librarianlogin()">
                  <fieldset>
                    <legend>LOGIN</legend>
                    <table>
                      <tr>
                        <td>Librarian ID</td>
                        <td>: <input type="text" name="librarianid" id="librarianid" value=""  onkeypress="validation()"><div id="msg1"></div></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" name="password" id="password" value=""  onkeypress="validation()"><div id="msg2"></div></td>
                      </tr>
                    </table>
                    <!-- <input type="checkbox" name="remember" value=""> Remember Me <br> -->
                    <br>
                    <input type="submit" name="login" value="LOGIN">
                    <a href="librarianReg.php">Registration</a>
                  </fieldset>
                </form>
            </td>
          </tr>
          </table>
        </td>
      </tr>
<?php include('footer.php'); ?>   