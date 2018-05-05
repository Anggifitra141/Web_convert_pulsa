<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientarea extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}
	//page
	public function index()
	{
		$this->load->view('clientarea/inc/header');
		$this->load->view('clientarea/home');
		$this->load->view('clientarea/inc/footer');
	}

	public function login()
	{
		$this->load->view('clientarea/inc/header');
		$this->load->view('clientarea/login_user');
		$this->load->view('clientarea/inc/footer');
	}
	public function convert()
	{
		$this->load->view('clientarea/inc/header');
		$this->load->view('clientarea/order');
		$this->load->view('clientarea/inc/footer');
	}
	public function home()
	{
		$this->load->view('clientarea/inc/header');
		$this->load->view('clientarea/home');
		$this->load->view('clientarea/inc/footer');
	}
	//login-register
	public function register_user()
	{
		$user=array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'alamat'=>$this->input->post('alamat'),
			'no_hp'=>$this->input->post('no_hp'),
			'email'=>$this->input->post('email'),
			'bank'=>$this->input->post('bank'),
			'no_rek'=>$this->input->post('no_rek'),
			'nama_pemilik'=>$this->input->post('nama_pemilik')
		);
		print_r($user);
		$email_check = $this->user_model->email_check($user['email']);

		if($email_check){
			$this->user_model->register_user($user);
			$this->session->set_flashdata('success_msg', 'Registered successfully. Now Login to your account.');
			redirect('clientarea/login');
		}else{
			$this->session->set_flashdata('error_msg', 'Try again.');
			redirect('clientarea/login_user');
		}
	}

	public function login_user()
	{
		$user_login=array(
 
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password'))

		);

		$data=$this->user_model->login_user($user_login['email'],$user_login['password']);
		  if($data)
		  {
		    $this->session->set_userdata('id',$data['id']);
		    $this->session->set_userdata('email',$data['email']);
		    $this->session->set_userdata('username',$data['username']);
		    $this->session->set_userdata('no_hp',$data['no_hp']);
		    $this->session->set_userdata('nama_lengkap',$data['nama_lengkap']);

		   redirect('clientarea/index');

		  }
		  else{
		    $this->session->set_flashdata('error_msg', 'Email or password false ,Try again.');
		    redirect('clientarea/login');

		  }
		}

	public function user_logout()
	{
		$this->session->sess_destroy();
		redirect('clientarea/login', 'refresh');
	}

}
