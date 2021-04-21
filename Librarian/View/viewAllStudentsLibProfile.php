<?php 
include_once('../Model/usersmodel.php');
$viewAllStudentsLibProfile = ViewAllStudentsLibInfo();
?>
<script type="text/javascript" src="../js/searchStudentLibProfile.js"></script>
<input type="text" name="roll" id="roll" onkeypress="ajax()" />
	<input type="button" name="" value="Search">
    <br>
    <div id="myh1" class="">
<table border="1">
        <tr>
            <th>Serial No.</th>
            <th>Roll</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php  for($i=0; $i < count($viewAllStudentsLibProfile); $i++){ ?>
         <tr>
             <td><?php echo $viewAllStudentsLibProfile[$i]['serialno'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['roll'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['name'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['mail'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['gender'] ?></td>
             <td>
                  <a href="editstudentlibprofile.php?roll=<?php echo $viewAllStudentsLibProfile[$i]['roll']; ?>">UPDATE</a> |
                  <a href="deletestudentlibprofile.php?roll=<?php echo $viewAllStudentsLibProfile[$i]['roll']; ?>">DELETE</a> 
                  <!-- <a href="blockstudentlibprofile.php?roll=<?php echo $viewAllStudentsLibProfile[$i]['roll']; ?>">BLOCK</a> -->
             </td>
         </tr><?php  } ?></div>
         <tr><td colspan="5"><a href="dashboard.php">Back To Dashboard</a></td></tr>
        
      
    </table>
