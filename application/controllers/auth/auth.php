<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	protected $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->auth = new stdClass;
		$this->load->library('flexi_auth');	

		// Redirect users logged in via password (However, not 'Remember me' users, as they may wish to login properly).
		if ($this->flexi_auth->is_logged_in_via_password() && uri_string() != 'auth/logout') 
		{
			// Preserve any flashdata messages so they are passed to the redirect page.
			if ($this->session->flashdata('message')) { $this->session->keep_flashdata('message'); }
			
			// Redirect logged in admins (For security, admin users should always sign in via Password rather than 'Remember me'.
			if ($this->flexi_auth->is_admin()) 
			{
				redirect('auth/admin');
			} else {
				redirect('/');
			}
		}

		$this->data['page_title'] = ' - My Account - ManPointsForum';
	}

	public function index()
	{
		redirect('auth/login/');
	}

	public function login()
	{
		if ($this->input->post('login_identity'))
		{
			$loginResult = $this->flexi_auth->login(
				$this->input->post('login_identity'),
				$this->input->post('login_password'),
				$this->input->post('remember_me')
			);
			if ($loginResult) {
				if ($this->input->post('login_redirect')) {
					redirect($this->input->post('login_redirect'));
				} else {
					redirect('auth');
				}
			}
		}

		if ($this->flexi_auth->ip_login_attempts_exceeded())
		{
			$this->data['captcha'] = $this->flexi_auth->recaptcha(FALSE);
		}

		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->data['page_title'] = 'Login' . $this->data['page_title'];
		$this->data['nav_active'] = 'account';
		$this->data['sub_nav_active'] = 'login';

		$this->data['content'] = $this->load->view('auth/login', $this->data, TRUE);
		$this->load->view('blank', $this->data);
	}

	function register()
	{
		// Redirect user away from registration page if already logged in.
		if ($this->flexi_auth->is_logged_in()) 
		{
			redirect('auth');
		}
		// If 'Registration' form has been submitted, attempt to register their details as a new account.
		else if ($this->input->post('register_user'))
		{			
			$this->flexi_auth->insert_user(
				$this->input->post('user_email'),
				$this->input->post('user_username'),
				$this->input->post('user_password'),
				array(),
				1,
				FALSE
			);
		}
		
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->data['page_title'] = 'Login' . $this->data['page_title'];
		$this->data['nav_active'] = 'account';
		$this->data['sub_nav_active'] = 'register';

		$this->data['content'] = $this->load->view('auth/register', $this->data, TRUE);
		$this->load->view('blank', $this->data);
	}

	function activate_user($user_id, $token = FALSE)
	{
		$this->flexi_auth->activate_user($user_id, $token, TRUE);

		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

		redirect('auth');
	}

	function resend_activation_token()
	{
		// If the 'Resend Activation Token' form has been submitted, resend the user an account activation email.
		if ($this->input->post('activation_identity')) 
		{
			$this->flexi_auth->resend_activation_token(
				$this->input->post('activation_identity')
			);
		}
		
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->data['content'] = $this->load->view('auth/resend_activation_token', $this->data, TRUE);
		$this->load->view('blank', $this->data);		
	}

	function forgotten_password()
	{
		// If the 'Forgotten Password' form has been submitted, then email the user a link to reset their password.
		if ($this->input->post('pwreset_identity')) 
		{
			$this->flexi_auth->forgotten_password(
				$this->input->post('pwreset_identity')
			);
		}
		
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->data['content'] = $this->load->view('auth/forgot_password', $this->data, TRUE);
		$this->load->view('blank', $this->data);		
	}

	function manual_reset_forgotten_password($user_id = FALSE, $token = FALSE)
	{
		// If the 'Change Forgotten Password' form has been submitted, then update the users password.
		if ($this->input->post('change_forgotten_password')) 
		{
			$this->flexi_auth->forgotten_password_complete(
				$user_id,
				$token,
				$new_password,
				FALSE
			);
		}
		
		// Get any status message that may have been set.
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->data['content'] = $this->load->view('auth/forgot_password_update', $this->data, TRUE);
		$this->load->view('blank', $this->data);	
	}

	public function logout()
	{
		// By setting the logout functions argument as 'TRUE', all browser sessions are logged out.
		$this->flexi_auth->logout(TRUE);
		
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());		
 
		redirect('auth');
	}
}