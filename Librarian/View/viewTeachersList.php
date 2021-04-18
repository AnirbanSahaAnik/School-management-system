<?php 
include_once('../Model/usersmodel.php');
$teachersilist = getAllTeachersList();

?>
<table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>DOB</th>
        </tr>
        <?php  for($i=0; $i < count($teachersilist); $i++){ ?>
         <tr>
             <td><?php echo $teachersilist[$i]['id'] ?></td>
             <td><?php echo $teachersilist[$i]['name'] ?></td>
             <td><?php echo $teachersilist[$i]['email'] ?></td>
             <td><?php echo $teachersilist[$i]['mobile'] ?></td>
             <td><?php echo $teachersilist[$i]['gender'] ?></td>
             <td><?php echo $teachersilist[$i]['dob'] ?></td>
         </tr>
         <?php  } ?>
         <tr><a href="dashboard.php">Back To Dashboard</a></tr>
        
      
    </table>
