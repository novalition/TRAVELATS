<?php 

require_once 'ViewSupir.php';
/**
* 
*/
class KelolaSupirUI extends ViewSupir

{
	
	public function tampilSupir()
	{
		include_once 'administrator/pages/detail-supir.php';
		$this->end();
	}
}



 ?>