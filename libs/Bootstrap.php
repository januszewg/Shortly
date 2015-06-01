<?php

/**
* 
*/
class Bootstrap
{
	private $_url = null;
	private $_controller= null;

	private $_controllerPath = 'controllers/';
	private $_modelPath = 'models/';
	private $_errorFile = 'error.php';
	private $_indexFile = 'index.php';

	function init(){
		Session::init();
		$this->_getURL();
		
		//Load the default controller if no url is set
		if(empty($this->_url[0])){
			$this->_loadDefaultcontroller();
			return false;
		}

		$this->_loadExistingController();
		$this->_callControllerMethod();
	}
	function setControllerPath($path){
		$this->_controllerPath= trim($path,'/').'/';
	}

	function setModelPath($path){
		$this->_modelPath= trim($path,'/').'/';
	}

	function setErrorFile($path){
		$this->_errorFile = trim($path,'/');
	}
	function setDefaulFile($path){
		$this->_indexFile = trim($path,'/');
	}
	private function _getURL(){
		$url =  isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = filter_var($url,FILTER_SANITIZE_URL);
		$this->_url = explode('/',$url);
	}

	private function _loadDefaultcontroller(){
		require $this->_controllerPath.$this->_indexFile;
		$this->_controller = new index();
		$this->_controller->index();
	}

	private function _loadExistingController(){
		$file = $this->_controllerPath.$this->_url[0].'.php';
		if (file_exists($file)) {
			require $file;
			$this->_controller = new $this->_url[0];
			$this->_controller->loadModel($this->_url[0],$this->_modelPath);
		}else{
			$this->_error();
			return false;
		}
	}

		// calling methods
	/*	http://localhost/controller/method/(param)/(param)/(param)
	*	url[0] = Controller
	*	url[1] = Method
	*	url[2] = Param (optional)
	*	url[3] = Param (optional)
	*	url[4] = Param (optional)
	*/
	private function _callControllerMethod(){
		$length = count($this->_url);
		if ($length > 1) {
			if (!method_exists($this->_controller, $this->_url[1])) {
				$this->_error();
			}
		}

		switch ($length) {
			case 5:
				$this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4]);
				break;
			
			case 4:
				$this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3]);
				break;

			case 3:
				$this->_controller->{$this->_url[1]}($this->_url[2]);
				break;
			
			case 2:
				$this->_controller->{$this->_url[1]}();
				break;

			default:
				$this->_controller->index();
				break;
		}
	}
	private function _error() {
		require $this->_controllerPath. $this->_errorFile;
		$this->_controller = new Error();
		$this->_controller->index();
		exit;
	}


}
?>