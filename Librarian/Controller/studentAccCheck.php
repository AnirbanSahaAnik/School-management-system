<?php
session_start();
require_once('../Model/usersmodel.php');
if(isset($_POST['submit'])){
    $sturoll = $_POST['sturoll'];
    if($sturoll == ""){
        echo "Roll Number is Required*";
    }else{
        if(is_numeric($sturoll)){
            $status = getStudentByRoll($sturoll);
            if($status){
                $_SESSION['roll'] = $sturoll;
                $exist = createStudentsLibraryAcc($sturoll);
            }else{
                echo "Invalid ROll";
            }
            
            
        }else{
            echo "Roll Number Should be Number";
        }
    }
}


?>