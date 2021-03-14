<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $ID = $_POST['ID'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $gender = $_POST['gender'];
        $dd = $_POST['dob'];
        $mm = $_POST['dob1'];
        $yyyy = $_POST['dob2'];
        $address = $_POST['address'];


		if($username == "" || $email == "" || $mobile == "" || $ID == "" || $password == "" || $confirm == "" || $gender == "" || $dd == "" || $mm == "" || $yyyy == "" || $address == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

				$userr = [	
							'name'=>$username, 
                            'mobile'=>$mobile,
                            'ID' => $ID,
                            'confirm'=>$confirm,
                            'gender'=>$gender,
							'password'=>$password, 
							'email'=> $email,
                            'dob'=>$dd,
                            'dob1'=>$mm,
                            'dob2'=>$yyyy,
                            'address' => $address
						];

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				$_SESSION['current_user'] = $userr;

				header('location: ../View/LoginPage.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

















        if(isset($_POST['name']) && isset($_POST['password']))
        {
            $username = $_POST['name'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            
            $capitalLetters = false;
            $smallLetters = false;
            $numbers = false;
            $underScore = false;
            $period = false;
            $dash = false;
            
            if($password == "" and $confirm == ""){
                echo "null submission. ";
        }elseif($password == $confirm){
                 true;
            }else {
          echo "Password not matched. ";
        }



            for($i=0;$i<strlen($username);$i++)
            {
                
                if((ord($username[$i]) >= 97 && ord($username[$i]) <= 122) || (ord($username[$i]) >= 65 && ord($username[$i]) <= 90) || (ord($username[$i]) >= 48 && ord($username[$i]) <= 57) || ($username[$i] == '.') || ($username[$i] == '-') || ($username[$i] == '_'))
                {
                    $capitalLetters = true;
                    $smallLetters = true;
                    $numbers = true;
                    $period = true;
                    $dash = true;
                    $underScore = true;
                }
                else{
                    echo "Username may contain alphanumeric characters, period, dash or underscore only. ";
                    return;
                }

            }
            if(strlen($username)<2)
              {
                echo "User name is not valid. ";
              }
            else{
                  true;
            }

            if(strlen($password)<8)
              {
                echo "Password is not strong. ";
              }
            else{
                  true;
            }

            
            $Ch=false;
            
            for($j=0;$j<strlen($password);$j++)
            {
                if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                {
                  
                    $Ch=true;
                    break;
                }
                

            }

            if($Ch==false){
                echo "Password is not vaild. ";
                return;
            }
            

        }








	}
?>