<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('User'));
	}
	public function index()
	{
		$this->load->view('daftar');
	}

	public function simpan(){
		$this->User->Daftar();
		redirect('Login');
	}
}
