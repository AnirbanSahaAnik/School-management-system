<?php 
include_once('../Model/usersmodel.php');
$studentsinfo = getAllstudentsInfo();
?>
<script type="text/javascript" src="../js/searchStudentlist.js"></script>

<input type="text" name="name" id="name" onkeyup="ajax()" />
	<input type="button" name="" value="Search">
    <br>
    <div id="viewstudentlist" class="">
<table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Class</th>
            <th>Section</th>
            <th>Roll</th>
            <th>Present Address</th>
        </tr>
        <?php  for($i=0; $i < count($studentsinfo); $i++){ ?>
         <tr>
             <td><?php echo $studentsinfo[$i]['name'] ?></td>
             <td><?php echo $studentsinfo[$i]['email'] ?></td>
             <td><?php echo $studentsinfo[$i]['mobile'] ?></td>
             <td><?php echo $studentsinfo[$i]['gender'] ?></td>
             <td><?php echo $studentsinfo[$i]['dob'] ?></td>
             <td><?php echo $studentsinfo[$i]['class'] ?></td>
             <td><?php echo $studentsinfo[$i]['section'] ?></td>
             <td><?php echo $studentsinfo[$i]['roll'] ?></td>
             <td><?php echo $studentsinfo[$i]['p_address'] ?></td>
         </tr><?php  } ?></div>
         <tr><td colspan="9"><a href="dashboard.php">Back To Dashboard</a></td></tr>
        
      
    </table>
