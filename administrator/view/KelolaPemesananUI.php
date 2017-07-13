<?php 

require_once 'ViewLaporanPemesanan.php';
/**
* 
*/
class KelolaPemesanan extends ViewLaporanPemesanan

{
	
	public function tampilPemesanan()
	{
		include_once 'administrator/model/LaporanPemesanan.php';
		$pms = new Pemesanan();
		$isi_pemesanan = $pms->tampilPemesanan();

		include_once 'administrator/pages/laporan-pemesanan.php';
		$this->end();
	}
}



 ?>