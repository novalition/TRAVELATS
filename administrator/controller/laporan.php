<?php 
include_once 'controller.php';

class KelolaPembayaranUI extends Controller
{
	
	public function getDataLaporanPembayaran()
	{
		include_once 'model/laporan-pembayaran.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDataLaporanPembayaran();

		return $daftar_kategori;
	}
 ?>