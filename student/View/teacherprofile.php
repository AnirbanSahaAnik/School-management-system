<?php
$title= "Dashboard";
require_once('../Model/DatabaseConnection.php');
$teacherList=getAllteacher();
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
          <fieldset>
            <legend>Teacher Profile</legend>
        <form class="" action="" method="post">
        <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile</td>
                    <td>Gender</td>
                    <td>Date of Birth</td>
                </tr>";
                for($i = 0; $i<count($teacherList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$teacherList[$i]['id']}</td>
                    <td>{$teacherList[$i]['name']}</td>
                    <td>{$teacherList[$i]['email']}</td>
                    <td>{$teacherList[$i]['mobile']}</td>
                    <td>{$teacherList[$i]['gender']}</td>
                    <td>{$teacherList[$i]['dob']}</td>
                    
                </tr>";
                }
                echo "</table>";
                ?>

        </form>
        </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>