<?php
  session_start();

	if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];


		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""|| $mobile == ""|| $gender == ""|| $dob == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$users = [

							'name'=>$name,
              'mobile'=>$mobile,
              'email'=> $email,
              'id'=>$id,
							'password'=>$password,
              'gender'=>$gender,
              'dob'=>$dob

						];

				$data = json_encode($users);
				$userData = fopen("../model/teacher.json", "w");
				fwrite($userData, $data);
				fclose($userData);

				header('location: ../view/addTeacher.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
