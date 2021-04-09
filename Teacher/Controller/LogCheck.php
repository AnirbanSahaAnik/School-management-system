<?php
	session_start();
	require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$ID = $_POST['ID'];
		$password = $_POST['password'];

		if($ID == "" || $password == ""){
			echo "null submission...";
		}else{

                 
			if(isset($_POST['ID']))
                            {

                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $Validation = false;


								if(strlen($ID) == 4)
								{
                                    
									if(strlen($password) > 7)
                                {

                                    for($j=0;$j<strlen($password);$j++)
                                    {
                                        
                                       
                                        if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                                        {   
											
                                        
                                            $Validation = true;

											$status = validateUser($ID, $password);
											if($status){
								
												$_SESSION['flag'] = true;
												//$_SESSION['id'] = $Id;
												setcookie('ID', $ID, time()+3600, '/');
												setcookie('flag', true, time()+3600, '/');
												
												$user = getUserById($Id);
												
												header('location: ../View/TeacherDashboard.php');
								
											}else{
												echo "invalid user";
											}
                                            
                                        
                                       
                                    

                                         
                                            
                                        }else{
											echo "Password not valid (must contain a special character) ";
										}
                                       
                                    }

                                }else{
                                    echo "Password not valid (length should be greater than 7) ";
                                }


								}else{
									echo "ID not valid (must contain 04 digits and integer number only) ";
								}


                            }






			
		}

	}
?>