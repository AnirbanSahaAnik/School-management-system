<?php
	session_start();
	require_once('../model/DatabaseConnection.php');
	if(isset($_POST['submit']))
	{
    $id= $_COOKIE['id']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address =$_POST['p_address'];


    if($id == "" || $name == "" || $email == "" || $mobile == "" || $gender == "" || $dob == "" || $p_address == ""){
        echo "null submission...";
    }else{
              

            if(strlen($mobile) == 11)
            {

                for($i=0; $i<strlen($name); $i++){
                    if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90)){
                        if(strlen($name) > 2){
                            $user = [	
                                'name'=>$name, 
                                'mobile'=>$mobile,
                                'id' => $id,
                                'gender'=>$gender, 
                                'email'=> $email,
                                'dob'=>$dob,
                                'p_address' =>$p_address
                                  ];
    
                                      $status = updateRequestProfile($user);
    
                                       if($status){
                                          header('location: ../View/viewprofile.php');
                                      }else{
                                        echo "error";
                                      }
                            
                        }else {
                            echo "Name length should be greater than 2";
                        }
                    }else {
                        echo "Name contain only alphanumeric characters";
                    }
                }


            }else{
                echo "Mobile number not valid (must contain 11 digits and integer number only) ";
            }

            
    }



	}
?>