<?php 

class Index_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function save($data){
		$this->db->insert("link",array('url'=>$data));
		$data = $this->db->select('select id_link from link');
		foreach ($data as $da) {
			$new_link = URL.'u/p/'.$da['id_link'];
		}
		$this->db->insert("new_link",array('url_new'=>$new_link,'id_link'=>$da['id_link']));
		header('location:'.URL.'link');
		
	}
}
?>