<?php 

/**
* 
*/
class ViewSupir
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'administrator/template/template-supir/header.php';
		include_once 'administrator/template/template-supir/sidebar.php';
		// include_once 'administrator/template/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'administrator/template/template-supir/footer.php';
	}
	
}


 ?>