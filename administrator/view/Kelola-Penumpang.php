<?php 
require_once 'ViewPenumpang.php';
/**
* 
*/
class KelolaPenumpangUI extends ViewPenumpang

{
	
	public function tampilPenumpang()
	{
		
		include_once 'administrator/pages/kelola-penumpang.php';
		$this->end();
	}
}


 ?>