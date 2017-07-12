<?php 

require_once 'View.php';
/**
* 
*/
class Pemesanan extends View

{
	
	public function tampilPemesanan()
	{
		include_once 'administrator/pages/pemesanan-kursi1.php';
		$this->end();
	}
}



 ?>