<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(array('User'));
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function viewLogin(){
		$this->load->view('login');
	}
	public function login(){
		$hasil=$this->User->check();
		if($hasil==1){
			$data=$this->User->get_one()->row_array();
			$this->session->set_userdata(array('status'=>'oke','username'=>$data['username'],'email'=>$data['email'],'iduser'=>$data['id'],'foto'=>$data['foto']));
		redirect('Welcome/main');
	}
		else{
			redirect('Login');
		}
	}
	public function Logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}