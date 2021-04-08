<?php
	session_start();
	require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$Id = $_POST['ID'];
		$password = $_POST['password'];

		if($Id == "" || $password == ""){
			echo "null submission...";
		}else{

                 
			if(isset($_POST['ID']))
                            {

                                $ID = $_POST['ID'];
                                $password = $_POST['password'];
                                $Validation = false;




								if(strlen($password) > 7)
                                {

                                    for($j=0;$j<strlen($password);$j++)
                                    {
                                        
                                       
                                        if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                                        {   
											
											if(strlen($ID) == 3)
                                           {
                                        
                                            $Validation = true;

											$status = validateUser($Id, $password);
											if($status){
								
												$_SESSION['flag'] = true;
												$_SESSION['id'] = $Id;
												
												$user = getUserById($Id);
												
												header('location: ../View/TeacherDashboard.php');
								
											}else{
												echo "invalid user";
											}
                                            
                                        
                                       
                                    

                                         }else{
                                              echo "ID not valid (must contain 03 digits and integer number only) ";
                                         }
                                            
                                        }else{
											echo "Password not valid (must contain a special character) ";
										}
                                       
                                    }

                                }else{
                                    echo "Password not valid (length should be greater than 7) ";
                                }



                            }






			
		}

	}
?>