<?php
	session_start();
	require_once('../model/adminModel.php');
	if(isset($_POST['submit']))
	{
    $id = $_COOKIE['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];


		$userinfo = array('id' => $id,'name' => $name, 'email' => $email);
		$check = updateMyInfo($id, $userinfo);
		if($check)
		{
			echo "info updated!";
			header('location: ../view/EditProfile.php');
		}
		else
		{
			echo "Can't update the Information!";
		}
	}
?>
