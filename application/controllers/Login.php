<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
	
    public function index()
	{
		$this->load->view('page/login');
	}	

	public function login()
	{
		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pass))
		{
			if($this->session->userdata('typeUser') == 0){
				redirect('admin/index');
			}else{
				redirect('client/index');
			}
			// $this->session->set_userdata('mail', $mail);
		}else{
			redirect('login/index');
		}
	}

	public function backOffice()
	{
		$this->load->model('Model');
		if($this->Model->checkLogin('admin@gmail.com','admin')){
			redirect('admin/index');
		}
	}

	public function frontOffice()
	{
		$this->load->model('Model');
		if($this->Model->checkLogin('toky@gmail.com','toky')){
			redirect('client/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/index');
	}

	public function signup()
	{
		$this->load->view('page/signup');
	}

	public function inscription()
	{
		$name = $this->input->post("name");
		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");
		$repass = $this->input->post("remdp");

		if($pass == $repass){
			$this->load->model('Model');
			$this->Model->insertUser($name,$mail,$pass);
			redirect('login/index');
		}

		redirect('login/signup');
	}
}
