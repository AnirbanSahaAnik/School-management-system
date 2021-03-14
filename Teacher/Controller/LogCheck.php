<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['name'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$userr = $_SESSION['current_user'];

			if($username == $userr['name'] && $password == $userr['password']){
				$_SESSION['flag'] = true;
				header('location: ../View/TeacherDashboard.php');
			}else{
				echo "invalid user";
			}
		}


















        if(isset($_POST['name']) && isset($_POST['password']))
        {
            $username = $_POST['name'];
            $password = $_POST['password'];
            
            $capitalLetters = false;
            $smallLetters = false;
            $numbers = false;
            $underScore = false;
            $period = false;
            $dash = false;
    
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
                    echo "Username must contain alphanumeric characters, period, dash or underscore only";
                    return;
                }

            }
            if(strlen($username)<2)
              {
                echo "User name is not valid.";
              }
            else{
                  true;
            }

            if(strlen($password)<8)
              {
                echo "Password is not strong.";
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
                echo "Password is not vaild.";
                return;
            }
            

        }








	}
?>