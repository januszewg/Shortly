<?php 
/**
* 
*/
class U_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function redirect($p){
		$data = $this->db->select('SELECT url FROM link INNER JOIN new_link ON link.id_link=new_link.id_link WHERE link.id_link='.$p);
		
		foreach ($data as $d) {
			header('location:'.$d['url']);
		}
	}
	function geturl(){
		return $this->db->select('SELECT url,url_new FROM link INNER JOIN new_link ON link.id_link=new_link.id_link');	 
	}

	
}
?>