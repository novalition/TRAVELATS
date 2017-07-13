<?php 

/**
* 
*/
class ViewLaporanPembayaran
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'administrator/template/manager-pembayaran/header.php';
		include_once 'administrator/template/manager-pembayaran/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'administrator/template/manager-pembayaran/footer.php';
	}
	
}


 ?>