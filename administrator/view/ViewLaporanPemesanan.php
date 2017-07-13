<?php 

/**
* 
*/
class ViewLaporanPemesanan
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'administrator/template/manager-pemesanan/header.php';
		include_once 'administrator/template/manager-pemesanan/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'administrator/template/manager-pemesanan/footer.php';
	}
	
}


 ?>