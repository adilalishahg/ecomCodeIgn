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
		$data['categ_dash'] = $this->HomeModel->get_categ(4);
		$data['products'] = $this->HomeModel->get_products(); 
		// $data['get_category_nav'] = $this->HomeModel->get_category_nav(); 
		// echo "<pre/>";
		// print_r($data);exit;
		$this->load->view('front/index',$data);
	}
	
	public function product_details($slug,$json=false){
		// print_r($_POST);exit;
		if(isset($_POST['json'])){
			$json = $_POST['json'];
			$slug = $_POST['slug'];
		}
		$data['arr'] = $this->HomeModel->product_details($slug);
		// print_r($data['arr']);exit;
		if($json){
			echo json_encode($data['arr']);return;
		} 
		$this->load->view('front/product-details',$data);
	}
	 

}

?>

