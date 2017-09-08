<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('indexView');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contactUs(){
		$this->load->view('contactUs');
	}
}
