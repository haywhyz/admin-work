	<?php 
	include '../includes/header.php';
	include '../includes/sidebar.php';
	include('../classes/DB.class.php');
	include('../classes/Student.class.php');
	?>
	<?php
	$get_student = new Student();
	$id = $_GET['student_id'];

	if(isset($_POST['update'])){

		
		$firstname = $_POST['firstname'];
		$othername = $_POST['othername'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$email =$_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$logs = $_POST['logs'];


		$update = $get_student->update($firstname,$othername,$lastname,$gender,$email,$username,$password,$address,$logs,$id);
		if(!$update){
			echo "error";

		}
		else{
			
			header('location:student.php');
			echo '<div class="alert alert-success">Record  updated</div>';
			
		}

	}
	?>



	

	<div class="col-8">
		
		<div class="card">
			<div class="card-header">Edit Student</div>
			<div class="card-body">
				<?php
				
				$fetch = $get_student->view_student_by_id($id);
				?>
				<form method="POST">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" value="<?php  echo $fetch['firstname']; ?>">
							</div>
							<div class="form-group">
								<label>Surname</label>
								<input type="text" name="lastname" class="form-control" value="<?php  echo $fetch['lastname']; ?>">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<input type="text" name="gender" class="form-control" value="<?php  echo $fetch['gender']; ?>">
							</div>
							<div class="form-group">
								<label>Number of Logs</label>
								<input type="text" name="logs" class="form-control" value="<?php  echo $fetch['logs']; ?>" >
							</div>
						</div>

						<div class="col-6">
							<div class="form-group">
								<label>Othername</label>
								<input type="text" name="othername" class="form-control" value="<?php  echo $fetch['othername']; ?>">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" value="<?php  echo $fetch['email']; ?>">
							</div>
							
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" value="<?php  echo $fetch['username']; ?>">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" name="password" class="form-control" value="<?php  echo $fetch['password']; ?>">
							</div>
						</div>
						
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea name="address" class="form-control" rows="4" cols="50" value=""> <?php  echo $fetch['address']; ?></textarea>
					</div>
					<div class="form">
						<button type="submit"  name="update" class="btn btn-primary form-control">update</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>

</div>
</div>


<?php 
include '../includes/footer.php';
?>
