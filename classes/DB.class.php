<?php 
 
 Class DB
 {
 	public $db_details = ['host'=>'localhost','user'=>'root','pass'=>'','dbname'=>'student','charset'=>'utf8'];
 	public $pdo;
 	public $var_query;
 	public $prep_query;
 	public $var_prep;
 	public $sql_statement;
 	public $sql_param_value;
 	
 	public function __construct()
 	{
 		$dsn = "mysql:host=".$this->db_details['host'].";dbname=".$this->db_details['dbname'].";charset=".$this->db_details['charset'];
 		$option = [
 			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 			PDO::ATTR_EMULATE_PREPARES => false
 		];
 		try {
 			$this->pdo = new PDO($dsn, $this->db_details['user'],$this->db_details['pass'],$option);
 			// echo "DB connect Success";
 		} catch (\PDOException $e) {
 			throw new  \PDOException($e->getMessage(), (int)$e->getCode());
 		}
 		
 	}

 	public function query($sql)
 	{
 		/*
 		 * @param Sql Query
 		 * @var Var_query
 		 */
 		$this->var_query = $this->pdo->query($sql);
 	}

 	public function select_query_fetch()
 	{
 		/*
 		 * @Return Array
 		 *
 		 */
 		$row = $this->var_query->fetch();
 		
 			return $row;
 		
 	}

 	public function prep_exec_query()
 	{
 		/*
 		 * Prepare and Execute Query
 		 * @return $row as Array and Boolean
 		 *
 		 */
 		
 		$this->prep_query = $this->pdo->prepare($this->sql_statement);
 		if($this->prep_query->execute($this->sql_param_value)){
 			return TRUE;
 		}else{
 			return FALSE;
 		}

 	}
 	public function fetch_query()
 	{
 		$row = $this->prep_query->fetchAll(PDO::FETCH_ASSOC);
 		return $row;

 	}

 	public function rowCount_query()
 	{
 		$count_row = $this->prep_query->rowCount();
 		return $count_row;

 	}

 	public function sql_handler($sql, $sql_condition=[], $param_value=[])
 	{
 		/**
 		 * Get the Query Statement
 		 * @param Sql get the statement
 		 * @Param Sql_condition get the WHERE clause
 		 * @Param Param_value get the Binding Value
 		 * @Return Sql_Statement
 		 */
 		$this->sql_param_value = $param_value;
 		$query = $sql;
 		$ab = function(array $a){
 				$compound = '';
		 		for($i=0; $i<=count($a) - 1; $i++)
		 		{
		 			$compound .=   implode('', $a[$i]);
		 			  
		 		}
		 		return $compound;
		 	};
		 	$where_clause =  $ab($sql_condition);
		 	$this->sql_statement = $query.$where_clause;
 			return $this->sql_statement;
 		
 	}


 }





 ?>