<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {

     public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc. 
        $this->load->model('CheckoutModel');
        $this->load->model('CartModel');
        $this->load->model('OrderModel');
    }
	public function index()
	{    
		$data['cart_product']=$this->CartModel->get_cart();
		$data['cart_total_price']=$this->CartModel->cart_total();  
		// debug($data);	
		$this->load->view('front/checkout',$data); 
		// exit; 
	}
	public function checkout_view()
	{ 
		$this->load->view('checkout');
	}
	public function checkout($id='')
	{ 
		if($id){
			$order_detail = $this->OrderModel->get_order_detail($id);
			
			if(!empty($order_detail[0])){
				$order_detail[0]->found=true;
			}else{
				$order_detail[0]->found=false;
			} 
			// debug($order_detail);
			$this->load->view('front/checkout_success',$order_detail[0]);
		}else{
			$order['pay_mode'] = 'cod';
			// debug($_POST);
			if(isset($_POST['payment'])&&$_POST['payment']=='cod'){
				$order['pay_mode'] = $_POST['payment'];
			}
			$cart_total=$this->CartModel->cart_total();
			$order['cust_name'] = $user['username'] = $_POST['first_name'].' '.$_POST['last_name'];
			$order['user_id'] = $user['user_id'] = get_userid($this->session);
			$order['cust_email'] =$user['email'] = $_POST['email'];
			$user['password'] = str_replace(' ','',$_POST['phone']);
			$order['cust_mobile'] =$user['phone'] = $_POST['phone'];
			$user['status'] = 1;
			$order['ip'] =$user['ip'] = get_client_ip();
			$order['order_date'] =$order['added_on'] =$user['added_on'] = date('Y-m-d');
			$order['address'] =$order['address2'] = $_POST['street_address'];
			if(isset($_POST['street_address2'])){
				$order['address2'] = $_POST['street_address2'];

			}
			$order['city'] = $_POST['town_city'];
			$order['zip'] = $_POST['postcode'];
			$order['state'] = $_POST['state_county'];
			$order['country'] = $_POST['country'];
			$order['order_id'] = mt_rand(1111,9999);
			
			$order['total'] = $cart_total['total_charges'];
			$order['delivery_charge'] = $cart_total['delivery'];
			$order['pro_qty'] = $cart_total['total_item'];
			$order['order_status'] = 'pending';
			$order['status'] = 1;
			$order['delivery_date'] = get_custom_date(DELIVER_DATE_LIMIT);
			$order['cart_detail']=json_encode($this->CartModel->get_cart());
			$cart['status']=2;
			
			// debug($order['cart_detail']);
			$user_add = $this->CheckoutModel->checkOut_person_Detail($user);
			$order_add = $this->CheckoutModel->create_order($order);
			 $this->CheckoutModel->cart_order_update($this->CartModel->get_cart(),2); 
			// exit;
			redirect(base_url().'checkout/checkout/'.$order['order_id']);
		}
		// $this->load->view('front/checkout_success',$order);
	}
	public function checkout_process()
	{
		$this->load->view('checkout_process');
	}
	public function checkout_success()
	{
		$this->load->view('checkout_success');
	}
	public function checkout_failed()
	{
	    
		$this->load->view('checkout_failed');
	}
}
