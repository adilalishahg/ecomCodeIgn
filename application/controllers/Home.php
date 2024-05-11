<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc.
		 
        $this->load->model('HomeModel');
    }
	public function index()
	{
		$data['banner'] = $this->HomeModel->get_banner();
		$data['categ'] = $this->HomeModel->get_categ();
		$data['products'] = $this->HomeModel->get_products(); 
		// echo "<pre/>";
		// print_r($data['cart_details']);exit;
		$this->load->view('front/index',$data);
	}
	
	public function product_details($slug){
		$data['arr'] = $this->HomeModel->product_details($slug);
		// print_r($data['arr']);exit;
		$this->load->view('front/product-details',$data);
	}
	 

}

?>

