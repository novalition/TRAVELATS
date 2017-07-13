<?php 

/**
* 
*/
class ViewOperator
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'administrator/template/template-operator/header.php';
		include_once 'administrator/template/template-operator/sidebar.php';
		// include_once 'administrator/template/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'administrator/template/template-operator/footer.php';
	}
	
}


 ?>