<?php
$title= "Course Details";
require_once('../Model/DatabaseConnection.php');
$courseList=getAllcourse();
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td>
            <center><h2>Course Details</h2></center>
            <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>ID</td>
                    <td>Course Name</td>
                    <td>Class</td>
                    <td>Description</td>
                </tr>";
                for($i = 0; $i<count($courseList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$courseList[$i]['id']}</td>
                    <td>{$courseList[$i]['course_name']}</td>
                    <td>{$courseList[$i]['class']}</td>
                    <td>{$courseList[$i]['description']}</td>
                </tr>";
                }
                echo "</table>";
                ?>
        </td>
      </tr>

      <?php include('footer.php'); ?>