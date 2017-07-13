<?php 

require_once 'ViewOperator.php';
/**
* 
*/
class KelolaOperatorUI extends ViewOperator

{
	
	public function tampilOperator()
	{
		include_once 'administrator/pages/create-operator.php';
		$this->end();
	}
}



 ?>