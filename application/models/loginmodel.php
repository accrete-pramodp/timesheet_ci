<?php 
class Loginmodel extends CI_Model {
	
	public function login_valid($username, $password) {
		$q = $this->db->where(['euname'=>$username, 'epass'=> $password])->from('users')->get();
		
		if($q->num_rows() >= 1){
			return true;
		} else {
			return false;
		}
	}
}
?>