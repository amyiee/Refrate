<?php
class Referee_Model extends CI_Model{
	
	function get_records(){
		$query = $this ->db->get('referee');
		 return $query->result();
	}
	function get_records_by_id($ref_id){
		$query = $this ->db->get_where('referee', array('ref_id' => $ref_id));
		 return $query->result();
	}
}
?>