<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('auth');
		check_session();
		$this->load->model(array('User'));
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function main(){
		$data['record']=$this->User->AmbilAllPost();
		$this->load->view('MainPage',$data);
	}

	public function create(){
		if(isset($_POST['submit'])){
			$this->User->SimpanPost();
			echo "<script>alert('post berhasil dibuat')</script>";
			echo "<script>window.location='".base_url('index.php/Welcome/main')."'</script>";
		}
		else{
			$this->load->view('CreatePost');
		}
		
	}

	public function akun(){
		$data['record']=$this->User->MyPost();
		$this->load->view('Akun', $data);
	}

	public function artikel(){
		$this->load->view('Artikel');
	}

	public function tag(){
		$this->load->view('SearchTag');
	}

	public function editUser(){
		if(isset($_POST['submit'])){
			$cek_old_pass=$this->User->check();

			if($cek_old_pass==1){
				if($this->input->post('newpassword')==$this->input->post('retypepassword')){
					$this->User->EditPassword();
					echo "<script>alert('Password Has Been Changed')</script>";
					echo "<script>window.location=history.go(-1)</script>";
				}else{
					echo "<script>alert('New password is not same as retype password')</script>";
					echo "<script>window.location=history.go(-1)</script>";
				}
			}else{
				echo "<script>alert('Old password is wrong')</script>";
				echo "<script>window.location=history.go(-1)</script>";
			}
		}elseif(isset($_POST['updatepoto'])){
			$config['upload_path'] = './assets/HCI/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('poto'))
                {
						$error = array('error' => $this->upload->display_errors());
						echo print_r($error);
                }
                else
                {
						$upload_data = $this->upload->data();
						$filename=$upload_data['file_name'];
						$this->User->uploadFoto($filename);
						$this->session->set_userdata(array('foto'=>$filename));
						echo "<script>alert('Foto Has Been Changed')</script>";
						echo "<script>window.location=history.go(-1)</script>";
                }

		}else{
		$this->load->view('EditUser');
		}
		
	}
	public function tentangKami(){
		$this->load->view('TentangKami');
	}
}
