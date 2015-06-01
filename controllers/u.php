<?php 
/**
* 
*/
class U extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->view->geturl= $this->model->geturl();
		$this->view->render('url');
	}
	function p($p){
		$this->model->redirect($p);
	}
}
?>