<?php 

require_once 'ViewOperator.php';
/**
* 
*/
class KelolaOperatorUI extends ViewOperator

{
	
	public function editOperator()
	{
		include_once 'administrator/pages/edit-operator.php';
		$this->end();
	}
}



 ?>