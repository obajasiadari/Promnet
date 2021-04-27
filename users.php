<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index(){
		$data['mahasiswa'] = $this->users_model->getAllUsers();
		$this->load->view('user_list.php', $data);
	}

	public function addform(){
		$this->load->view('addform');
	}

	public function insert(){
		$user['id'] = $this->input->post('$id');
		$user['nama'] = $this->input->post('nama');
		$user['nim'] = $this->input->post('nim');
		$user['jurusan'] = $this->input->post('jurusan');
		$user['alamat'] = $this->input->post('alamat');

		$query = $this->users_model->insertuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
	public function edit($id){
		$data['mahasiswa'] = $this->users_model->getUser(id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['id'] = $this->input->post('$id');
		$user['nama'] = $this->input->post('nama');
		$user['nim'] = $this->input->post('nim');
		$user['jurusan'] = $this->input->post('jurusan');
		$user['alamat'] = $this->input->post('alamat');

		$query = $this->users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}


}


?>