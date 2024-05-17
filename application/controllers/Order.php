<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {
	
	public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc. 
        $this->load->model('OrderModel');
    }
	public function index()
	{ 
		$data['orders']=$this->OrderModel->get_orders();
		// debug($data);
		$this->load->view('orders',$data);
	} 
	public function add_to_cart(){
		$post = $this->input->post();
		// print_r($post);exit;
		$check = $this->CartModel->add_to_cart($post);
		if($check){
			$msg = 'Product added to cart successfully';
			$msg_type = 'success';
			$this->session->set_flashdata($msg_type,$msg);
		}else{
			$msg = 'Product already added to cart successfully.Please go to cart to update quantity';
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
		// print_r($post);exit;
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
	public function order_track(){
		if(isset($_POST['order_track_val'])){
			$val = ($_POST['order_track_val']);
			if (strpos($val, "order_") !== false) {
				$val = str_replace("order_", "", $val); 
			}
			$order_detail = $this->OrderModel->order_track($val);
			
			if(!empty($order_detail[0])){
				$order_detail[0]->found=true;
			}else{
				$order_detail[0]->found=false;
			} 
			$this->load->view('front/checkout_success',$order_detail[0]);
		}else{

			$data['cart_product']=$this->CartModel->get_cart();
			$data['cart_total_price']=$this->CartModel->cart_total();  
			// debug($data);	
			$this->load->view('front/order_track',$data); 
		}
		// exit; 
	 
	}
	public function change_order_status(){
		$where['id'] = $_POST['id'];
		$where['order_id'] = $_POST['order_id'];
		$array['order_status'] = $_POST['st'];
		
		 
		$q = $this->OrderModel->order_status_change($array,$where);
		if(strpos($_POST['st'], "_") !== false) {
			$array['order_status'] = str_replace("_", " ", $_POST['st']); 
		}
		if($q){
			$msg = 'Order status changed to '.$array['order_status'];
			$check=1;
			$msg_type='success';
		}else{
			$msg = 'Order status change failed to '.$array['order_status'];
			$check=0;
			$msg_type='error';
		}
		echo json_encode(['msg'=>$msg,'status'=>$check,'msg_type'=>$msg_type,'msg_alert'=>ucfirst($array['order_status'])]);
		
	}
	
	 

}

?>

