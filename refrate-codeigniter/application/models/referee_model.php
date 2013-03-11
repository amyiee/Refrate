<?php
class Referee_Model extends CI_Model{
	
	function get_records(){
		$query = $this ->db->get('referee');
		 return $query->result();
	}
}
?>