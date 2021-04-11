<?php
    session_start();

    require_once('../Model/DatabaseConnection.php');

	if(isset($_POST['submit'])){

		$marks = $_POST['marks'];

		if($marks == ""){
			echo "null submission...";
		}else{

            echo "Success!!";

			
		}

















       







	}
?>