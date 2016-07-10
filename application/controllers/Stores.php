<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stores extends CI_Controller {

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
	public function store()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Store/store');
		$this->load->view('Template/footer');
	}

	public function product1()
	{
		$this->output->enable_profiler(FALSE);
		$this->load->view('Template/header');
		$this->load->view('Store/product1');
		$this->load->view('Template/footer');
	}	

}