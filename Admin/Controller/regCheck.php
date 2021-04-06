<?php
  session_start();
  include_once('../model/adminModel.php');

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

				$userinfo = [
              'id'=>$id,
							'name'=>$name,
              'email'=> $email,
							'password'=>$password

						];

            $result = insert($userinfo);
            if($result){
                header('location: ../view/adminlogin.php');
            }else{
                echo "not insert";
            }

				// $data = json_encode($users);
				// $userData = fopen("../model/admin.json", "w");
				// fwrite($userData, $data);
				// fclose($userData);


			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
