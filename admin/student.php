	<?php 
	include '../includes/header.php';
	include '../includes/sidebar.php';

	?>
<?php
	include('../classes/DB.class.php');
	include('../classes/Student.class.php');

	?>


			

					<div class="col-8">
						<div>
						<a href="add-student.php" class="btn btn-info col-2">Add student</a>
						</div>
						<div class="card">
							<div class="card-header">All Student</div>
							<div class="card-body">
								<?php
								$student = new student();
									$row=$student->view_all_student();
									
								?>
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
							            <tr>
							                <th>Name</th>
							                <th>Gender</th>
							                <th>Email</th>
							                <th>Username</th>
							                <th>Password</th>
							                <th>Login</th>
							                <th>operations </th>
							                
							            </tr>
							        </thead>
							        <?php 
							        foreach ($row as $row){
							        	?>
									<tr>
										<td><?php echo $row['firstname']." ".$row['othername']." ".$row['lastname'] ?></td>
										<td><?php echo $row['gender'] ?></td>
										<td><?php echo $row['email'] ?></td>
										<td><?php echo $row['username'] ?></td>
										<td><?php echo $row['password'] ?></td>
										<td><?php echo $row['logs'] ?></td>
										<td>
											<a href="edit-student.php?student_id=<?php echo $row['student_id']?>" class="btn btn-info">edit</a>
											<a href="delete_student.php?student_id=<?php echo $row['student_id']?>" class="btn btn-danger">delete</a>
										</td>
									</tr>
									
								<?php }?>
									
								</table>
							</div>
						</div>

						
						
					</div>

				</div>
			</div>
			

			<?php 
	include '../includes/footer.php';
	?>
		