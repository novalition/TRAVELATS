<?php 

require_once 'ViewOperator.php';
/**
* 
*/
class KelolaOperatorUI extends ViewOperator

{
	
	public function detailOperator()
	{
		include_once 'administrator/pages/detail-operator.php';
		$this->end();
	}
}



 ?>