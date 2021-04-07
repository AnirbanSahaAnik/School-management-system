<?php
  session_start();
  include_once('../model/studentModel.php');
	if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address = $_POST['p_address'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];


		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""
    || $mobile == ""|| $gender == ""|| $dob == "" || $p_address == "" || $class == "" || $section == "" || $roll == "" ){
			echo "null submission...";
		}else{

			if($password == $repass){

				$userinfo = [

							'name'=>$name,
              'mobile'=>$mobile,
              'email'=> $email,
              'id'=>$id,
							'password'=>$password,
              'gender'=>$gender,
              'dob'=> $dob,
              'p_address'=> $p_address,
              'class'=> $class,
              'section'=> $section,
              'dob'=> $dob,
              'roll'=> $roll

						];

            $result = insert($userinfo);
            if($result){
                header('location: ../view/addStudent.php');
            }else{
                echo "not insert";
            }
				// $data = json_encode($users);
				// $userData = fopen("../model/teacher.json", "w");
				// fwrite($userData, $data);
				// fclose($userData);
        //
				// header('location: ../view/addTeacher.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
