<?php 
/**
* 
*/
class Link extends Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->view->link =$this->model->link();
		$this->view->render('link');
	}
}
?>