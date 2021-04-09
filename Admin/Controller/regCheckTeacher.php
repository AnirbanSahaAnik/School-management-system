<?php
  session_start();
  include_once('../model/teacherModel.php');


	if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];




		if($id == "" || $name == "" || $email == "" || $password == "" || $repass == ""|| $mobile == ""|| $gender == ""|| $dob == ""){
			echo "null submission...";
		}else{

			if($password == $repass){
        function FormValidation()
                        {
                          if(isset($_POST['name'])){


                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mobile = $_POST['mobile'];
                            $id = $_POST['id'];
                            $password = $_POST['password'];
                            $gender = $_POST['gender'];
                            $dob = $_POST['dob'];
                              $Validation = false;

                                if(strlen($id) == 4)
                                {

                                    if(strlen($mobile) == 11)
                                {

                                    if(strlen($password) > 7)
                                {

                                    for($j=0; $j<strlen($password); $j++)
                                    {


                                        if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                                        {




                                               for($i=0; $i<strlen($name); $i++)
                                               {

                                                   if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_'))
                                                   {
                                                     if(strlen($name) > 2)
                                                     {

                                                       $Validation = true;


                                                        $userinfo = [

                                                              'name'=>$name,
                                                              'mobile'=>$mobile,
                                                              'email'=> $email,
                                                              'id'=>$id,
                                                              'password'=>$password,
                                                              'gender'=>$gender,
                                                              'dob'=>$dob

                                                           ];

                                                          $result = insert($userinfo);
                                                          if($result){
                                                              header('location: ../view/addTeacher.php');
                                                          }else{
                                                              echo "not insert";
                                                          }

                                                    }

                                               }
                                               else{
                                                 echo "Username not valid (may contain alphanumeric characters, period, dash or underscore only and length should be greater than 2) ";
                                                  }

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
                          if(FormValidation())
                            {
                                true;
                            }



			}
      else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
