<?php 
include_once('../Model/usersmodel.php');
$teachersilist = getAllTeachersList();
?>
<script type="text/javascript" src="../js/searchTeacherList.js"></script>

<input type="text" name="id" id="id" onkeyup="ajax()" />
	<input type="button" name="" value="Search">
	<!-- <div id="result">
		
	</div> -->
    <br>
    <div id="viewteacherlist" class="">
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
         <?php  } ?></div>
         <tr><td colspan="7"><a href="dashboard.php">Back To Dashboard</a></td></tr>
        
      
    </table>
