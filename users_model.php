<?php
class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllUsers(){
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	public function insertuser($user){
		return $this->db->insert('mahasiswa',$user);
	}

	public function getUser($id){
		$query = $this->db->get_where('mahasiswa',array('id'=>$id));
		return $query->row_array();
	}

	public function updateuser($user, $id){
		$this->db->where('mahasiswa.id',$id);
		return $this->db->update('mahasiswa', $user);
	}

	public function deleteuser($id){
		$this->db->where('mahasiswa.id', $id);
		return $this->db->delete('mahasiswa');
	}

}
?>