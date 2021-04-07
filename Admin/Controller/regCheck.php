<?php
  session_start();
  include_once('../model/adminModel.php');

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];

    // function NameValidate($nameVal)
    //                     {
    //                           if(isset($_POST['name']))
    //                           {
    //                               $name = $_POST['name'];
    //                               $nameVal = false;
    //                               // $smallLetters = false;
    //                               // $numbers = false;
    //                               // $underScore = false;
    //                               // $period = false;
    //                               // $dash = false;
    //                               // $len = false;
    //
    //                               for($i=0;$i<strlen($name);$i++)
    //                               {
    //
    //                                   if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_') || ($name[$i] > 2))
    //                                   {
    //                                       $nameVal = true;
    //                                       // $capitalLetters = true;
    //                                       // $smallLetters = true;
    //                                       // $numbers = true;
    //                                       // $period = true;
    //                                       // $dash = true;
    //                                       // $underScore = true;
    //                                       // $len = true;
    //
    //
    //                                   }
    //                                   else{
    //                                       echo "Username may contain alphanumeric characters, period, dash or underscore only ";
    //                                       return;
    //                                   }
    //                               }
    //
    //                               if(strlen($name)<2)
    //                             {
    //                               echo "User name is not valid. ";
    //                             }
    //
    //                           }
    //                       }

		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}
    else{
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
