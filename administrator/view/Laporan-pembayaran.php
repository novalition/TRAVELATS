<?php 

require_once 'ViewLaporanPembayaran.php';
/**
* 
*/
class KelolaPembayaranUI extends ViewLaporanPembayaran

{
	
	public function tampillaporanpembayaran()
	{
		include_once 'administrator/pages/laporan-pembayaran.php';
		$this->end();
	}
}



 ?>