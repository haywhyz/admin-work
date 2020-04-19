<?php
include('../classes/DB.class.php');
include('../classes/Student.class.php');

$student = new student();

$id = $_GET['student_id'];
$student->delete_student($id);
header('location:student.php');
// echo '<div class="alert alert-danger">Record deleted succesfully</div>';



?>