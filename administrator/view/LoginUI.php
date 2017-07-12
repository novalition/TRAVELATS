<?php 

require_once 'ViewLoginUI.php';
/**
* 
*/
class LoginUI extends ViewLoginUI

{
	
	public function tampilLoginUI()
	{
		include_once 'administrator/pages/loginUI.php';
		$this->end();
	}
}



 ?>