<?php 
require_once 'ViewLaporanPemesanan.php';
/**
* 
*/
class KelolaPemesananUI extends ViewLaporanPemesanan

{
	
	public function tampillaporanpemesanan()
	{
		include_once 'administrator/pages/laporan-pemesanan.php';
		$this->end();
	}
}


 ?>