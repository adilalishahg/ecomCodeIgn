<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {
	
	public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc. 
        $this->load->model('CartModel');
    }
	public function index()
	{ 
		$data['cart']=get_from_cart();
		$data['cart_total_data']=$this->cart_total;  
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
	public function cart_update(){
		$post = $this->input->post();
		$check = $this->CartModel->cart_update($post);
		if($check){
			$msg = 'Cart updated  successfully';
			$msg_type = 'success';
			$this->session->set_flashdata($msg_type,$msg);
		}else{
			$msg = 'Cart updated Failed';
			$msg_type = 'error';
			$this->session->set_flashdata($msg_type,$msg);
		} 
		echo json_encode(['msg'=>$msg,'status'=>$check,'msg_type'=>$msg_type]);
		return;
	}
	public function delete_product($pro_id){
		$post = $this->input->post();
		$check = $this->CartModel->delete_product($pro_id);
		if($check){
			$msg = 'Cart remove successfully';
			$msg_type = 'success';
			$this->session->set_flashdata($msg_type,$msg);
		}else{
			$msg = 'Cart remove Failed';
			$msg_type = 'error';
			$this->session->set_flashdata($msg_type,$msg);
		} 
		echo json_encode(['msg'=>$msg,'status'=>$check,'msg_type'=>$msg_type]);
		return;
	}
	
	 

}

?>

