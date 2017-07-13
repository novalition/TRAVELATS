<?php 

/**
* 
*/
class ViewManajer
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'administrator/template/template_manager/header.php';
		include_once 'administrator/template/template_manager/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'administrator/template/template_manager/footer.php';
	}
	
}


 ?>