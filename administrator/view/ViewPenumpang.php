<?php 

/**
* 
*/
class ViewPenumpang
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'administrator/template/template-penumpang/header.php';
		include_once 'administrator/template/template-penumpang/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'administrator/template/template-penumpang/footer.php';
	}
	
}


 ?>