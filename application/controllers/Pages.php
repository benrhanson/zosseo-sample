<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('header');
		$this->load->view('home');
	}

	public function about()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('header');
		$this->load->view('about');
	}

	public function store()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('header');
		$this->load->view('store');
	}	

	public function contact()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('header');
		$this->load->view('contact');
	}

	public function faq()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('header');
		$this->load->view('home');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */