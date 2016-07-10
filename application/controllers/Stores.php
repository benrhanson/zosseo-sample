<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stores extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	// routes

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

	// shopping cart
	public function add_to_cart()
	{
		$price = $this->input->post('price');
		$product_id = $this->input->post('product_id');
		$qty = $this->input->post('qty');

		$purchase_item = array(
			'price' => $price * $qty,
			'product_id' => $product_id,
			'qty' => $qty
		);

		$this->session->set_userdata($purchase_item);
		redirect(base_url('/store'));
	}

}