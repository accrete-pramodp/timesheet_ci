<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	$this->load->helper('form');	
		$this->load->view('login');
	}
	
	public function login_submit() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User name', 'required|alpha|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('loginmodel');
			
			if($this->loginmodel->login_valid($username, $password)){
				$this->load->library('session');
				$this->session->set_userdata('username', $username);
				
				return redirect('welcome');
			} else {
				echo "password not matched";
			}
			
		}
	}
	
	public function logOff() {
		$newdata = array(
				'username'  =>''
		);
		$this->load->library('session');
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		
		redirect('login','');
	}
}
