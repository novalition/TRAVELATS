<?php 

/**
* 
*/

include_once 'Model.php';
class Pembayaran extends Model
{
	public $id_pesanan;
	public $id_operator;
	public $jenis_pembayaran;
	public $no_pembayaran;
	public $tanggal_pembayaran;
	public $total_bayar;
	
	public function tampilPembayaran()
	{
		$query = $this->db->prepare("SELECT * FROM pembayaran");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}	


 ?>