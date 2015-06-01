<?php
class Index extends Controller
{
	function __construct()
	{	
		parent::__construct();
		$this->view->css = array('index');
	}
	function index(){
		$this->view->render('index');
	}
	function run(){
		$data = $_POST['link'];
		$this->model->save($data);
	}
}
?>