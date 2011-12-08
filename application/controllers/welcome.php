<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function about()
	{
		$this->load->view('welcome_message');
		$this->load->view('about');
		$this->load->view('footer');
	}
	
	public function a()
	{
		$this->load->view('welcome_message');
		$this->load->view('a');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function b()
	{
		$this->load->view('welcome_message');
		$this->load->view('b');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function c()
	{
		$this->load->view('welcome_message');
		$this->load->view('c');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function d()
	{
		$this->load->view('welcome_message');
		$this->load->view('d');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function e()
	{
		$this->load->view('welcome_message');
		$this->load->view('e');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function f()
	{
		$this->load->view('welcome_message');
		$this->load->view('f');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function g()
	{
		$this->load->view('welcome_message');
		$this->load->view('g');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function h()
	{
		$this->load->view('welcome_message');
		$this->load->view('h');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function register()
	{
		
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[6]|strtolower|xss_clean|callback_username_check');
		$this->form_validation->set_rules('firstname','First Name', 'required|alpha_numeric|xss_clean');
		$this->form_validation->set_rules('email','Email Address', 'required|valid_email|xss_clean');
		$this->form_validation->set_rules('password','Password', 'required|xss_clean');
		$this->form_validation->set_rules('confirmPassword','Confirmation Password', 'required|matches[password]|xss_clean');
		
		//false jika tidak valid atau belum dijalankan
		//true jika sudah dijalankan dan semua valid
		
		if($this->form_validation->run()==false)
		{	
			$this->load->view('welcome_message');
			$this->load->view('view_register');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('welcome_message');
			$this->confirmation();
			$this->load->view('footer');
		}
		
	}
	
	public function username_check($str)
	{
				
		if($this->user_model->username_exists($str)==true)
		{
			$this->form_validation->set_message('username_check',"Username is exist");
			return false;
		}
		else
		{
			return true;
		}
	}
	
	public function confirmation()
	{
		$data['username'] = $this->input->post('username');
		$data['firstname'] = $this->input->post('firstname');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['confirmPassword'] = $this->input->post('confirmPassword');
		
		$this->user_model->register_user($data);
		
		$this->load->view('view_confirmation',$data);
		$this->load->view('view_login');
		$this->load->view('content');
	}
	
	public function check()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('password','password', 'callback_logincheck');
		
		if($this->form_validation->run()==false)
		{	
			$this->load->view('welcome_message');
			$this->load->view('view_login');
			$this->load->view('content');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('welcome_message');
			$this->masuk();
			$this->load->view('content');
			$this->load->view('footer');
		}
	}
	
	
	public function login_check($data)
	{
		if($this->user_model->login($data)==true)
		{
			$this->form_validation->set_message('username_check',"Username is exist");
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	public function login()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->session->set_userdata('item',$data['username']);
		$this->input->set_cookie('name',$data['username']); 
		if($this->user_model->login($data)==true)
		{
			$this->masuk();
		}
		else
		{
			$this->load->view('welcome_message');
			$this->session->set_flashdata('gagal', 'Invalid username or password ');
			$this->load->view('view_login');
			$this->load->view('content');
			$this->load->view('footer');
			
		}
	}
	
	public function masuk()
	{
		$this->load->library('session');
		$this->load->helper('cookie');
		$data['siapa'] = $this->session->userdata('item');
		
		$data['siapa2'] = $this->input->cookie('name');
		
		$this->load->view('welcome_message');
		$this->load->view('view_masuk',$data);
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	public function logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('item');
		$this->load->view('welcome_message');
		$this->load->view('view_login');
		$this->load->view('content');
		$this->load->view('footer');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */