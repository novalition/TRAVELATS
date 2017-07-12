<?php 

require_once 'View.php';
/**
* 
*/
class Pembayaran extends View

{
	
	public function tampilPembayaran()
	{
		include_once 'administrator/pages/konfirmasi-pemesanan.php';
		$this->end();
	}
}



 ?>