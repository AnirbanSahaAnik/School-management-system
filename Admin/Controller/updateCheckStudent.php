<?php
	session_start();
	require_once('../model/studentModel.php');
	if(isset($_POST['update']))
	{
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address = $_POST['p_address'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];

		$userinfo = array('id' => $id,'name' => $name, 'email' => $email, 'mobile' => $mobile,'gender' => $gender,'dob' => $dob,'p_address' => $p_address,'class' => $class,'section' => $section,'roll' => $roll);
		$check = updateMyInfo($id, $userinfo);
		if($check)
		{
			echo "info updated!";
			header('location: ../view/viewStudent.php');
		}
		else
		{
			echo "Can't update the Information!";
		}
	}
?>
