	<?php 
	include '../includes/header.php';
	include '../includes/sidebar.php';
	?>

			

					<div class="col-8">
						
						<div class="card">
							<div class="card-header">Add Student</div>
							<div class="card-body">
								<form method="POST" action="add-student-action.php">
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Firstname</label>
												<input type="text" name="firstname" class="form-control">
											</div>
											<div class="form-group">
												<label>Surname</label>
												<input type="text" name="lastname" class="form-control">
											</div>
											<div class="form-group">
												<label>Gender</label>
												<input type="text" name="gender" class="form-control">
											</div>
										</div>

										<div class="col-6">
											<div class="form-group">
												<label>Othername</label>
												<input type="text" name="othername" class="form-control">
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" class="form-control">
											</div>
											<!-- <div class="form-group">
												<label>Phone Number</label>
												<input type="text" name="pnumber" class="form-control">
											</div> -->
											<div class="form-group">
												<label>Username</label>
												<input type="text" name="username" class="form-control">
											</div>
										</div>
										
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea name="address" class="form-control" rows="4" cols="50"></textarea>
									</div>
									<div class="form">
										<button type="submit"  name="submit" class="btn btn-primary form-control">Add</button>
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
		