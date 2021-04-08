<?php
	session_start();
	require_once('../model/librarianModel.php');
	if(isset($_POST['update']))
	{
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

		$userinfo = array('id' => $id,'name' => $name, 'email' => $email, 'mobile' => $mobile,'gender' => $gender,'dob' => $dob);
		$check = updateMyInfo($id, $userinfo);
		if($check)
		{
			echo "info updated!";
			header('location: ../view/viewLibrarian.php');
		}
		else
		{
			echo "Can't update the Information!";
		}
	}
?>
