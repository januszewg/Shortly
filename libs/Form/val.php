<?php
/**
* 
*/
class Val
{
	
	function __construct()
	{
		
	}		 
	function minlength($data,$arg){
		if (strlen($data) < $arg) {
			return "Your string can be only $arg long";
		}
	}
	function maxlength($data,$arg){
		if (strlen($data) > $arg) {
			return "Your string can be only $arg long";
		}
	}
	function digit($data){
		if (ctype_digit($data) == false) {
			return "Your string must be a number";
		}
	}
	function __call($name,$argument){
		throw new Exception("$name doesn't exists inside of: ".__CLASS__);
		
	}
}

?>