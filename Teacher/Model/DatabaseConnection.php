<?php
	
	require_once('db.php');

	function validateUser($ID, $password){

		$conn = getConnection();

		$sql = "select * from teacher where id='{$ID}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(is_countable($row) && count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function validateRegistration($email, $mobile){

		$conn = getConnection();

		$sql = "select email, mobile from teacher where id='{$ID}' and email='{$email}' and mobile='{$mobile}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(is_countable($row) && count($row) > 0){
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


	function insertNotice($user){

		$conn = getConnection();
		$sql = "insert into notice (notice) values ( '{$user['notice']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function insertNotes($user){

		$conn = getConnection();
		$sql = "insert into notes (notes) values ( '{$user['notes']}')";
		
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

	function getScheduleById($Id){

		$conn = getConnection();

		$sql = "select * from teacher where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}



	function getStudentById($Id){

		$conn = getConnection();

		$sql = "select * from student where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}


	function getNoticeById($Id){

		$conn = getConnection();

		$sql = "select * from notice where id='{$Id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}


	function getMarksById($Id){

		$conn = getConnection();

		$sql = "select id, name, class, roll, marks from student where id='{$Id}'";
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



	
	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from student";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function getAllStudentsMarks(){
		$conn = getConnection();
		$sql = "select id, name, class, subject, section, roll, marks from student";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function getAllBooks(){
		$conn = getConnection();
		$sql = "select isbn, title, author, edition from book_info";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function getAllNotice(){
		$conn = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function getAllNotes(){
		$conn = getConnection();
		$sql = "select * from notes";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}



	function updatePassword($Id, $newpass){
		$conn = getConnection();
		$sql = "update teacher set password='{$newpass}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function updateProfile($Id, $userinfo){
		$conn = getConnection();
		$sql = "update teacher set name='{$userinfo['uname']}', email='{$userinfo['email']}', mobile='{$userinfo['mobile']}', gender='{$userinfo['gender']}', dob='{$userinfo['dob']}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function updateNotice($Id, $userinfo){
		$conn = getConnection();
		$sql = "update notice set notice='{$userinfo['notice']}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function updateMarks($Id, $userinfo){
		$conn = getConnection();
		$sql = "update student set marks='{$userinfo['marks']}' where id='{$Id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteNoticeById($Id){
		$conn = getConnection();
		$sql = "delete from notice where id='$Id'";
		$result = mysqli_query($conn,$sql);
		if($result){
			header('location: ../View/ViewNotice.php?your info is deleted');
		}
		else
		{
			header('location: ../View/ViewNotice.php?Not deleted your info');
		}
	
	}

	function deleteMarksById($Id){
		$conn = getConnection();
		$sql = "update student set marks=NULL where id='$Id'";
		$result = mysqli_query($conn,$sql);
		if($result){
			header('location: ../View/StudentListMarks.php?your info is deleted');
		}
		else
		{
			header('location: ../View/StudentListMarks.php?Not deleted your info');
		}
	
	}



?>