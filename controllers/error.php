<?php 
/**
* 
*/
class Error extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('error');
	}
	function index(){
		$this->view->render('error404');
	}
}
?>