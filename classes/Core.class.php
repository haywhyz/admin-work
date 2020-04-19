<?php 
class Core
{
	public static function autoload()
	{
		spl_autoload_register(function($class){
			$class_file = 'classes\\'.$class.'.class.php';
			// var_dump($class_file.file_exists('../classes\\'.$class_file));
			if(file_exists($class_file)){
				require_once($class.'.class.php');
			}else{
				die("Class file not Exists");
			}
		});
		
	}
	public static function autoload_backend()
	{
		spl_autoload_register(function($class){
			$class_file = '../classes\\'.$class.'.class.php';
			// var_dump($class_file.file_exists('../classes\\'.$class_file));
			if(file_exists($class_file)){
				require_once($class.'.class.php');
			}else{
				die("Class file not Exists");
			}
		});
		
	}

	public static function redirect($directory)
	{
			header('location:'.$directory);
	}

	public static function clean_value($value)
	{
		$cleaned_value = htmlentities(trim($_POST[$value]));
		return $cleaned_value;
	}

	
	}


 ?>