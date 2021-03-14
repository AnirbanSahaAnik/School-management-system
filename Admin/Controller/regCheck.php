<?php
  session_start();
  
	if(isset($_POST['signup'])){

		$id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];


		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$users = [
              'id'=>$id,
							'name'=>$name,
							'password'=>$password,
							'email'=> $email
						];

				$data = json_encode($users);
				$userData = fopen("../model/admin.json", "w");
				fwrite($userData, $data);
				fclose($userData);

				header('location: ../view/adminlogin.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
