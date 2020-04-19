<?php
	include('../classes/DB.class.php');
	include('../classes/Student.class.php');

	$student = new student();

	if(isset($_POST['submit'])){

		$firstname = $_POST['firstname'];
		$othername = $_POST['othername'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$email =$_POST['email'];
		$username = $_POST['username'];
		$password =  rand(0,99999999); 
		$address = $_POST['address'];
		$log = "0";


		$insert = $student->save_profile($firstname,$othername,$lastname,$gender,$email,$username,$password,$address,$log);
		if(!$insert){
			echo "error";

		}
		else{
			echo '<div class="alert alert-success">Record Added succesfully</div>';
			header('location:student.php');
			
		}

	}
?>
