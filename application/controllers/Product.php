<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

     public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc.
        $this->load->library('form_validation');
        $this->load->model('ProductModel');
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		 

		$this->form_validation->set_rules('prod_id', 'product id', 'required|trim');
		$this->form_validation->set_rules('pro_name', 'product name', 'required|trim');
		$this->form_validation->set_rules('brand', 'brand', 'required|trim');
		$this->form_validation->set_rules('featured', 'featured', 'required|trim');
		$this->form_validation->set_rules('highlights', 'highlights', 'required|trim');
		$this->form_validation->set_rules('description', 'description', 'required|trim');
		$this->form_validation->set_rules('stock', 'stock', 'required|trim');
		$this->form_validation->set_rules('mrp', 'mrp', 'required|trim');
		$this->form_validation->set_rules('selling_price', 'selling price', 'required|trim');
		if(empty($_FILES['pro_main_image']['name'])){

			$this->form_validation->set_rules('pro_main_image', 'pro main image', 'required|trim');
		}
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['categories'] = $this->ProductModel->all_category();
			$this->load->view('product',$data); 
		} else { 
			$post= $this->input->post();
			$check = $this->ProductModel->add_product($post);
			if($check){
				$this->session->set_flashdata('success','Product Added Successfully');
				
			}
			else{
				$this->session->set_flashdata('error','Something went wrong');
				 
			}
			redirect('product');
		} 
	}
}
