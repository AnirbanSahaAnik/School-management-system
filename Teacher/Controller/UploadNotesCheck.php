<?php
    require_once('../Model/DatabaseConnection.php');


    if(isset($_POST['submit']))
    {
        
        $file_info = $_FILES['photo'];

        if($file_info['name'] == "" || $file_info['size'] == 0){
            echo "Null Submission";
    
        }else{
            $size = $file_info['size'];
            $KB =   $size/1024;
            $name = $file_info['name'];
            $type = $file_info['type'];
            $filetemp_name = $file_info['tmp_name'];
            if($KB >= 100){
                echo "file size should be minimum";
                echo "</br>";
            }else{
                if($type == "image/png" || $type == "image/jpeg"){
                    $path = '../Resources/'.$name;
                    if(move_uploaded_file($filetemp_name, $path)){
                        header('location: ../View/UploadNotes.php');
                        return true;
                    }else{
                       echo "Error Occured!";
                        }
                    }else{
                    echo "file type should be Only png or jpeg format";
                    echo "</br>";
    
                }
            }
            
        }

    }
?>