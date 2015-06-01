<?php 
/**
* 
*/
class Link_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function link(){
		return $this->db->select('SELECT new_link.url_new,link.id_link FROM link INNER JOIN new_link on 
					link.id_link=new_link.id_link ORDER BY id_link desc limit 1');

	}
}
?>