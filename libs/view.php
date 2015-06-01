<?php 
	class View{
		function __construct(){
			
		}
		public function render($name,$noinclude = false){
			if($noinclude == true){
				require 'views/'.$name.'.php';
			}else{
				require 'views/inc/header.php';
		 		require 'views/'.$name.'.php';
		 		require 'views/inc/footer.php';
			}
	 		
	 	}
	 	
	}
?>