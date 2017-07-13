<?php 

require_once 'ViewLaporanPembayaran.php';
/**
* 
*/
class KelolaPembayaran extends ViewLaporanPembayaran

{
	
	public function tampilPembayaran()
	{
		include_once 'administrator/model/LaporanPembayaran.php';
		$pmb = new Pembayaran();
		$isi_pembayaran = $pmb->tampilPembayaran();

		include_once 'administrator/pages/laporan-pembayaran.php';
		$this->end();
	}
}



 ?>