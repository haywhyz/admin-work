<?php 
Class Admin extends DB
{
	public $username;
	public $password;
	
	/*
	 *@param string $username
	 *@param string $password
	 *@return boolean
	 */
	public function login($username, $password)
	{
		$query = "SELECT * FROM `admin`";
		$sql_clause = [[' WHERE '],['username','=','?'],[' AND '],['password','=','?']];
		$sql_clause_value = [$username, $password];
		Parent::sql_handler($query, $sql_clause, $sql_clause_value);
		Parent::prep_exec_query();
		$count = Parent::rowCount_query();
		return $count;
		
	}

}




 ?>