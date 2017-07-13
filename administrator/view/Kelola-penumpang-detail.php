<?php 
require_once 'ViewPenumpang.php';
/**
* 
*/
class KelolaPenumpangUI extends ViewPenumpang

{
	
	public function tampilPenumpang()
	{
		
		include_once 'administrator/pages/detail-penumpang.php';
		$this->end();
	}
}


 ?>