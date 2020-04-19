<?php 

class Validate{

	public $error = [];
	public function validate_value($select_post, array $condition)
	{
		foreach ($condition as $post_name => $validate_condition) {
			// echo $post_name;
			foreach ($validate_condition as $condition_key => $condition_value) {
				// echo $condition_key;
				foreach ($condition_value as $rule => $rule_value) {
					# code...
					// var_dump($rule);
				$value = $select_post[$condition_key];
				// echo $value;

			if($rule == 'required' && $value == '')
			{
				$this->add_error($condition_key." value is empty");
			}elseif($value != ''){
				
				switch ($rule) {
					case 'min':
						
						if(strlen($value) < $rule_value):
							$this->add_error($condition_key." requires minimum of ".$rule_value);

						endif;
						break;

					case 'max':
						if($value > $condition_value):
							$this->add_error($value." requires maximum of ".$condition_value);
						endif;
						break;
					
					default:
						# code...
						break;
						}
					}else{
						// echo "Error";
					}
				
				}
			}
		}
	}

	public function add_error($error)
	{
		$this->error[] = $error;
	}

	// public function display_validation_error()
	// {
	// 	return $this->error;
	// }

}





 ?>