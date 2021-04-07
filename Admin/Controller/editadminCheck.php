<?php


	if(isset($_POST['submit'])){
    // $Username = json_decode(file_get_contents('../Model/admin.json'));

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $Username->password;



		if($id == "" || $name == "" || $email == "" ){
			echo "Please fillup all";
		}else{

				$users = [
              'id'=>$id,
							'name'=>$name,
							'password'=>$password,
							'email'=> $email
						];

				// $data = json_encode($users);
				// $userData = fopen("../model/admin.json", "w");
				// fwrite($userData, $data);
				// fclose($userData);

				header('location: ../view/EditProfile.php');

		}

	}
?>
