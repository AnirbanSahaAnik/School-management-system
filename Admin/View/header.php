<?php
	session_start();
	if(!isset($_COOKIE['flag']))
	{
    header('location: adminlogin.php');
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
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
                  <h2>
										<a href="viewProfile.php"><?php echo $_COOKIE['name'];?></a>
									</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
