<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('authModel');
	}
	
	public function login()
	{
		$this->load->view('auth/login');
	}

	public function register(){
		if($this->input->post('submit') == 'Submit'){
			 	$userRegister = array(
			 		'firstName'		=>		$this->db->escape_like_str($this->input->post('firstname')),
			 		'lastName'		=>		$this->db->escape_like_str($this->input->post('lastname')),
			 		'sex'			=>		$this->db->escape_like_str($this->input->post('sex')),
			 		'dateOfBirth'	=>		$this->db->escape_like_str($this->input->post('year'))."-".$this->db->escape_like_str($this->input->post('month'))."-".$this->db->escape_like_str($this->input->post('date')),
			 		'religion'		=>		$this->db->escape_like_str($this->input->post('religion')),
			 		'country'		=>		$this->db->escape_like_str($this->input->post('country')),
			 		'email'			=>		$this->db->escape_like_str($this->input->post('email')),
			 		'password'		=>		md5($this->db->escape_like_str($this->input->post('password')))
			 	);

			 	if($this->db->insert('users', $userRegister)){
			 		$userId = $this->db->insert_id();
			 		$this->session->set_userdata(array('userId' => $userId, 'email' => $this->input->post('email')));
			 		$this->load->view('users/dashboard');
			 	}else{

			 	}
		}else{
			$data['religion'] = $this->authModel->getData('tbl_religion');
			$data['country'] = $this->authModel->getData('countryMaster');
			$this->load->view('auth/register', $data);
		}
	}
}
