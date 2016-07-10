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
		$this->load->view('Template/header');
		$this->load->view('Static/home');
		$this->load->view('Template/footer');
	}

	public function about()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Static/about');
		$this->load->view('Template/footer');
	}

	public function contact()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Static/contact');
		$this->load->view('Template/footer');
	}

	public function faq()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Static/faq');
		$this->load->view('Template/footer');
	}	

	public function privacy()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Static/privacy-policy');
		$this->load->view('Template/footer');
	}	

	public function refund()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Static/refund');
		$this->load->view('Template/footer');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */