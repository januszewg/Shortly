<?php 
 /**
 * 
 */
 class Controller
 {
 	function __construct()
 	{
 		$this->view = new view();
 	}
 	public function loadModel($name,$modePath = 'models/'){
 		
 		$path = $modePath.$name.'_model.php';
 		
 		if (file_exists($path)) {
 			require $modePath.$name.'_model.php';
 			$modelName = $name.'_Model';
 			$this->model = new $modelName();
 		}
 	}
 	
 }
?>