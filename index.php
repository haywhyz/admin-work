
<?php
include('classes/DB.class.php');
include('classes/Student.class.php');

// error_reporting(1);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
	.container{
		width: 450px;
		height: 1200px;
		margin-top: 200px;
	}
	
</style>
<body>
	<div class="container">
		<?php
		session_start();
		$student = new student();
		
		if(isset($_POST['submit']))
		{
			$username = $_POST['username']; 
			$password = $_POST['password'];




	
				$login = $student->login($username,$password);
				


		} 
		?>
		<form method="post">
			
			<div class="card" >
				<h2 class="text-center"> Login</h2>
				<div class="card-body">
					<div class="form-group">
						<label>USERNAME</label>
						<input type="text" name="username" class="form-control" required="required" placeholder="username">
					</div>
					<div class="form-group">
						<label>PASSWORD</label>
						<input type="password" name="password" class="form-control" required="required" placeholder="username">
					</div>
					<div class="form-group">
						<button class="btn btn-info btn-block" name="submit" type="submit">Login</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>