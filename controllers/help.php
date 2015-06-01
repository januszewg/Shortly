<?php
/**
* 
*/
class Help extends Controller
{
	#calling construct's controller
	function __construct()
	{
		parent::__construct();
	}
	#render a view file
	function index(){
		$this->view->render('help');
	}
	#creating a view inside the view, and this can recive arguments from the url
	public function other($arg = false){
		echo "Example <br/>";
		echo "optional: ".$arg;
	}
}

?>