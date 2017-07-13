<?php 

/**
* 
*/

include_once 'Model.php';
class Pemesanan extends Model
{
	public $id_pemesanan;
	public $id_penumpang;
	public $no_kursi;
	public $id_jadwal;
	public $tanggal_pembayaran;
	
	public function tampilPemesanan()
	{
		$query = $this->db->prepare("SELECT * FROM pemesanan");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}	


 ?>