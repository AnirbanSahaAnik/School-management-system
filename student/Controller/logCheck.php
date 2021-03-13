<?php
	$myfile = fopen('../Model/student.json', 'r');
	$data = fread($myfile, filesize('../Model/student.json'));

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			$users = json_decode($data, true);
			if($id == $users['id'] && $password == $users['password']){
				header('location: ../view/dashboard.html');
			}else{
				echo "invalid user";
			}
		}

	}
?>
