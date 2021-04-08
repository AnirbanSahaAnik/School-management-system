<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$name = $_POST['uname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $ID = $_POST['ID'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
        $gender = $_POST['gender'];
        $dd = $_POST['dob'];


		if($name == "" || $email == "" || $mobile == "" || $ID == "" || $password == "" || $confirm == "" || $gender == "" || $dd == ""){
			echo "null submission...";
		}else{

			if($password == $confirm){

				/*$user = [	
							'uname'=>$name, 
                            'mobile'=>$mobile,
                            'ID' => $ID,
                            'confirm'=>$confirm,
                            'gender'=>$gender,
							'password'=>$password, 
							'email'=> $email,
                            'dob'=>$dd
						];


						$status = insertUser($user);

						if($status){
							header('location: ../View/LoginPage.php');
						}else{
							echo "error";
						}*/

                        function FormValidation()
                        {
                            if(isset($_POST['uname']))
                            {
                                $name = $_POST['uname'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
                                $Validation = false;



                                if(strlen($ID) == 3)
                                {

                                    if(strlen($mobile) == 11)
                                {

                                    if(strlen($password) > 7)
                                {

                                    for($j=0;$j<strlen($password);$j++)
                                    {
                                        
                                       
                                        if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                                        {


                                            if(strlen($name) > 2)
                                            {
   
                                               for($i=0;$i<strlen($name);$i++)
                                               {
                                           
                                                   if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_'))
                                                   {
                                              
                                                       $Validation = true;
       
       
                                                       $user = [	
                                                       'uname'=>$name, 
                                                       'mobile'=>$mobile,
                                                       'ID' => $ID,
                                                       'gender'=>$gender,
                                                       'password'=>$password, 
                                                       'email'=> $email,
                                                       'dob'=>$dd
                                                         ];
                           
                                                             $status = insertUser($user);
                           
                                                              if($status){
                                                                 header('location: ../View/LoginPage.php');
                                                             }else{
                                                               echo "error";
                                                             }
       
                                              
                                              
                                               
                                              
       
                                                    }
                                               }
   
                                             }else{
                                               echo "Username not valid (may contain alphanumeric characters, period, dash or underscore only and length should be greater than 2) ";
                                                }
                                            
                                            
                                        }else{
                                            echo "Password not valid (must contain a special character)";
                                        }
                                       
                                    }

                                }else{
                                    echo "Password not valid (length should be greater than 7) ";
                                }


                                }else{
                                    echo "Mobile number not valid (must contain 11 digits and integer number only) ";
                                }


                                }else{
                                    echo "ID not valid (must contain 03 digits and integer number only) ";
                                }

                                
                            }
                        }




                        function PassValidate()
                        {
                            if(isset($_POST['password']))
                            {
                                $name = $_POST['uname'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
                                $Validation2 = false;


                                if(strlen($password) > 7)
                                {

                                    for($j=0;$j<strlen($password);$j++)
                                    {
                                        
                                       
                                        if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                                        {
                                            $Validation2 = true;

                                             $user = [	
                                                    'uname'=>$name, 
                                                    'mobile'=>$mobile,
                                                    'ID' => $ID,
                                                    'gender'=>$gender,
                                                    'password'=>$password, 
                                                    'email'=> $email,
                                                    'dob'=>$dd
                                                      ];
                        
                                                          $status = insertUser($user);
                        
                                                           if($status){
                                                              header('location: ../View/LoginPage.php');
                                                          }else{
                                                            echo "error";
                                                          }
                                            
                                        }
                                       
                                    }

                                }else{
                                    echo "Password not valid (must contain a special character and length should be greater than 7) ";
                                }

                            }
                        }



                        function MobileValidate()
                        {

                            if(isset($_POST['mobile']))
                            {

                                $name = $_POST['uname'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
                                $Validation2 = false;
                                
                                
                                
                                
                                if(strlen($mobile) == 11)
                                {
                                        
                                            $Validation2 = true;

                                             $user = [	
                                                    'uname'=>$name, 
                                                    'mobile'=>$mobile,
                                                    'ID' => $ID,
                                                    'gender'=>$gender,
                                                    'password'=>$password, 
                                                    'email'=> $email,
                                                    'dob'=>$dd
                                                      ];
                        
                                                          $status = insertUser($user);
                        
                                                           if($status){
                                                              header('location: ../View/LoginPage.php');
                                                          }else{
                                                            echo "error";
                                                          }
                                            
                                        
                                       
                                    

                                }else{
                                    echo "Mobile number not valid (must contain 11 digits and integer number only) ";
                                }


                            }
                            
                            
                           
                        }



                        function IDValidate()
                        {

                            if(isset($_POST['ID']))
                            {

                                $name = $_POST['uname'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
                                $Validation2 = false;
                                
                                
                                
                                
                                if(strlen($ID) == 3)
                                {
                                        
                                            $Validation2 = true;

                                             $user = [	
                                                    'uname'=>$name, 
                                                    'mobile'=>$mobile,
                                                    'ID' => $ID,
                                                    'gender'=>$gender,
                                                    'password'=>$password, 
                                                    'email'=> $email,
                                                    'dob'=>$dd
                                                      ];
                        
                                                          $status = insertUser($user);
                        
                                                           if($status){
                                                              header('location: ../View/LoginPage.php');
                                                          }else{
                                                            echo "error";
                                                          }
                                            
                                        
                                       
                                    

                                }else{
                                    echo "ID not valid (must contain 03 digits and integer number only) ";
                                }


                            }
                            

                        }



                        /*function EmailValidate()
                        {
                            if(isset($_POST['email']))
                            {

                                $name = $_POST['uname'];
                                $email = $_POST['email'];
                                $mobile = $_POST['mobile'];
                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $gender = $_POST['gender'];
                                $dd = $_POST['dob'];
                                $Validation2 = false;

                                $EmailStatus = getEmailById($ID);

                                if($EmailStatus == $email)
                                {
                                    echo "Email is already exists in Database";

                                }else{
                                    $Validation2 = true;

                                    $user = [	
                                           'uname'=>$name, 
                                           'mobile'=>$mobile,
                                           'ID' => $ID,
                                           'gender'=>$gender,
                                           'password'=>$password, 
                                           'email'=> $email,
                                           'dob'=>$dd
                                             ];
               
                                                 $status = insertUser($user);
               
                                                  if($status){
                                                     header('location: ../View/LoginPage.php');
                                                 }else{
                                                   echo "error";
                                                 }
                                }


                            }
                        }*/





                        if(FormValidation())
                        {
                            true;
                        }



                       /* if(isset($_POST['uname']) && isset($_POST['password']))
                        {
                            $name = $_POST['uname'];
                            $password = $_POST['password'];
                            $confirm = $_POST['confirm'];
                            
                            $capitalLetters = false;
                            $smallLetters = false;
                            $numbers = false;
                            $underScore = false;
                            $period = false;
                            $dash = false;
                
                            for($i=0;$i<strlen($name);$i++)
                            {
                                
                                if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_'))
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
                            if(strlen($name)<2)
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
                
                        }*/

                        //$_SESSION['current_user'] = $userr;
                        //header('location: ../View/LoginPage.php'); 
                

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
			}else{
				echo "password & confirm password mismatch..";
			}
		}

















       







	}
?>