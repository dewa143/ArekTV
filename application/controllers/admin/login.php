<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run() == TRUE){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->admin_login->login($username,$password);
		}

		$data = array('title' => 'login');
		$this->load->view('backend/login',$data,false);
	}

	public function logout()
	{
		$this->admin_login->logout();
	}

}
