<?php
class Referee_Model extends CI_Model{
	
	function get_records(){
		$query = $this ->db->get('Referee');
		return $query->result();
	}
	function get_records_by_id($ref_id){
		$query = $this ->db->get_where('Referee', array('ref_id' => $ref_id));
		return $query->result();
	}
	function getLeagues_by_id($ref_id){
		$query = $this ->db->query("SELECT league_name FROM League INNER JOIN RefereeLeague ON League.league_id=RefereeLeague.league_id WHERE ref_id= ".$ref_id);
		return $query->result();
	}
}
?>