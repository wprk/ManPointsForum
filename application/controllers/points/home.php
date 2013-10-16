<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->auth = new stdClass;
		$this->load->library('flexi_auth');

		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		if ($this->flexi_auth->is_logged_in()) {
			$this->data['user'] = $this->flexi_auth->get_user();
		}
		$this->data['page_title'] = ' - ManPointsForum';
	}

	public function index()
	{
		$this->data['page_title'] = 'Points' . $this->data['page_title'];
		$this->data['nav_active'] = 'points';
		$this->data['sub_nav_active'] = 'index';

		$this->data['content'] = $this->load->view('content/points/home', $this->data, TRUE);
		$this->load->view('blank', $this->data);
	}
}