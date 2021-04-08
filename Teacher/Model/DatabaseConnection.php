<?php
	
	require_once('db.php');

	function validateUser($Id, $password){

		$conn = getConnection();

		$sql = "select * from teacher where id='{$Id}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into teacher (id, name, email, mobile, gender, dob, password) values ( '{$user['ID']}', '{$user['uname']}', '{$user['email']}', '{$user['mobile']}', '{$user['gender']}', '{$user['dob']}', '{$user['password']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function getUserById($Id){

		$conn = getConnection();

		$sql = "select * from teacher where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}



	function getEmailByAllUsers(){

		$conn = getConnection();

		$sql = "select * from teacher";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<table border=1>
			
			      <tr>
			
			      <td>{$row['email']}</td>
			     
			
			     </tr>

				 </table>";
		   
		}
	   return $row;
	}



	
	function getAllUsers(){

		$conn = getConnection();

		$sql = "select * from student";
		$result = mysqli_query($conn, $sql);
         
        echo "<table border=1> 
			<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Mobile No.</td>
			<td>ID</td>
			<td>Gender</td>
			<td>Date of Birth</td>
			<td>Present Address</td>
			<td>Class</td>
			<td>Section</td>
			<td>Roll</td>
			</tr>";


		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>
			
			      <td><a href= ../View/StudentProfile.php>{$row['name']}</a></td>
				  <td>{$row['email']}</td>
				  <td>{$row['mobile']}</td>
				  <td>{$row['id']}</td>
				  <td>{$row['gender']}</td>
				  <td>{$row['dob']}</td>
				  <td>{$row['p_address']}</td>
				  <td>{$row['class']}</td>
				  <td>{$row['section']}</td>
				  <td>{$row['roll']}</td>
			     
			
			     </tr>";
		   
		}
		echo "</table>";
	}



	function updatePassword($Id, $newpass){
		$conn = getConnection();
		$sql = "update registration set Password='{$newpass}' where ID='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>