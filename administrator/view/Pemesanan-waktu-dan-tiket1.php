<?php 

require_once 'View.php';
/**
* 
*/
class Pemesanan extends View

{
	
	public function tampilPemesanan()
	{
		include_once 'administrator/pages/pemesanan-waktu-dan-tiket1.php';
		$this->end();
	}
}



 ?>