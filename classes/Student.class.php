<?php

class Student extends DB 
{

	public function save_profile($firstname,$othername,$lastname,$gender,$email,$username,$password,$address,$logs)
	{
		 $stmt = $this->pdo->prepare("INSERT INTO `profile`(`firstname`, `othername`, `lastname`, `gender`, `email`, `username`, `password`, `address`, `logs`) VALUES(:firstname,:othername,:lastname,:gender,:email,:username,:password,:address,:logs)");
		
		   $stmt->bindparam(":firstname",$firstname);
		   $stmt->bindparam(":othername",$othername);
		   $stmt->bindparam(":lastname",$lastname);
		   $stmt->bindparam(":gender",$gender);
		   $stmt->bindparam(":email",$email);
		   $stmt->bindparam(":username",$username);
		   $stmt->bindparam(":password",$password);
		   $stmt->bindparam(":address",$address);
		   $stmt->bindparam(":logs",$logs);
		   $insert= $stmt->execute();
  			 return $insert;

	}



	public function view_all_student()
	{
		$query = "SELECT * FROM `profile`";
		 $sql_clause       = [];
        $sql_clause_value = [];
        Parent::sql_handler($query, $sql_clause, $sql_clause_value);
        Parent::prep_exec_query();
        $row = Parent::fetch_query();
        return $row;
	}


	public function view_student_by_id($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM `profile` WHERE `student_id`=:id");
		 $stmt->execute(array(":id"=>$id));
		  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		  return $editRow;


	}

	public function delete_student($id)
	{

		$stmt = $this->pdo->prepare("DELETE FROM `profile` WHERE `student_id`=:id");
		  $stmt->bindparam(":id",$id);
		 $fetch= $stmt->execute();
		  return $fetch;
		
    }


    public function update($firstname,$othername,$lastname,$gender,$email,$username,$password,$address,$logs)
    {
 
   $stmt=$this->pdo->prepare("UPDATE profile SET firstname=?,othername=?,lastname=?,gender=?, email=?, username=?, password=?, address=?, logs=? WHERE student_id=?");
    	
   		$update= $stmt->execute([$firstname,$othername,$lastname,$gender,$email,$username,$password,$address,$logs,$id]);
   			return $update; 
   			
}

	public function update_log($student_id,$log_count)
	{
		$log_count=$log_count+1;
		$stmt = $this->pdo->prepare("UPDATE profile SET logs=:log_count WHERE `student_id`=:student_id");
		 $stmt->execute(array(":log_count"=>$log_count,":student_id"=>$student_id));
	}
	public function check_log($student_id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM `profile`  WHERE `student_id`=:student_id");
		 $stmt->execute(array(":student_id"=>$student_id));
		  $editRow=$stmt->fetch(PDO::FETCH_OBJ);
		  return $editRow;

	}

	public function login($username,$password)
	{
		
		    $query = $this->pdo->prepare("SELECT * FROM profile WHERE username=? AND password=? ");
		    $query->execute(array($username,$password));
		    $row=$query->fetch(PDO::FETCH_OBJ);
		    // echo SELF::check_log($row->logs);
		    if($query->rowCount() >0) {
		    	if(SELF::check_log($row->student_id)->logs <5){
		    		SELF::update_log($row->student_id,$row->logs);
			        $_SESSION['user'] = $username;
			        header("location: student/dashboard");
		    	}
		    	else{
		    		echo '<div class="alert alert-danger">you have exceeded attempts</div>';
		    	}
		    } 
		    else {
		        echo '<div class="alert alert-danger">incorrect username or password</div>';
		    }
	}

	


	
}



?>
