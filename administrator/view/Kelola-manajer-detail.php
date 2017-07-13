<?php 
require_once 'ViewManajer.php';
/**
* 
*/
class KelolaManajerUI extends ViewManajer

{
	
	public function tampilManajer()
	{

		include_once 'administrator/pages/detail-manajer.php';
		$this->end();
	}
}


 ?>