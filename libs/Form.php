<?php
require_once 'Form/val.php';
class Form
{	
	private $_currentitem = null;

	private $_postdata = array();

	private $_val =array();

	private $_error =array();
	function __construct(){
		$this->_val = new Val();
	}

	function post($field){
		$this->_postdata[$field] = $_POST[$field];
		$this->_currentitem = $field;
		return $this;
	}
	function get($fieldname = false){
		if ($fieldname) {
			if (isset($this->_postdata[$fieldname])) {
				return $this->_postdata[$fieldname];
			}else{
				return false;
			}
			
		}else{
			return $this->_postdata;
		}
		
	}
	function val($type,$arg = null){
		if ($arg==null) {
			$error = $this->_val->{$type}($this->_postdata[$this->_currentitem]);
		}else{
			$error = $this->_val->{$type}($this->_postdata[$this->_currentitem],$arg);
		}
		
		if ($error) {
			$this->_error[$this->_currentitem] = $error;
		}
		return $this;
	}
	function submit(){
		if (empty($this->_error)) {
			return true;
		}else{
			$str = '';
			foreach ($this->_error as $key => $value) {
				$str.= $key .'=>'.$value.'<br />';
			}
			throw new Exception($str);
			
		}
	}
}?>