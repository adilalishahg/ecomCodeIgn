<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc.
        $this->load->library('form_validation');
        $this->load->model('CartModel');
    }
	public function index()
	{ 
		$data['cart']=$this->CartModel->get_cart();
		// echo "<pre/>";print_r($data);exit;  
		$this->load->view('front/cart',$data);
	} 
	public function add_to_cart(){
		$post = $this->input->post();
		$check = $this->CartModel->add_to_cart($post);
		if($check){
			$msg = 'Product added to cart successfully';
			$msg_type = 'success';
			$this->session->set_flashdata($msg_type,$msg);
		}else{
			$msg = 'Product already added to cart successfully';
			$msg_type = 'error';
			$this->session->set_flashdata($msg_type,$msg);
		} 
		echo json_encode(['msg'=>$msg,'status'=>$check,'msg_type'=>$msg_type]);
		return;
		// redirect('cart');
	}
	 

}

?>

