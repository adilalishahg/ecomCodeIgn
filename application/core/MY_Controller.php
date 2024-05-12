<?php
class MY_Controller extends CI_Controller {
	protected $cart; // Define $cart as a class property
	protected $cart_total; // Define $cart as a class property

    public function __construct() {
        parent::__construct();
        // Add common functionality here
        // This code will run before any other controller's constructor
		$data = [];
		$this->cart  = get_from_cart();
		$this->cart_total  = get_cart_total();
		if($this->session->userdata('user_id')=='')
		{
			$this->session->set_userdata('user_id',mt_rand(1111,9999));
		}  
		
		if($this->cart){

			$data['cart_details'] = $this->cart;
		}
		if($this->cart_total){

			$data['cart_total'] = $this->cart_total['total_charges'];
			$data['total_item'] = $this->cart_total['total_item'];
			$data['sub_total'] = $this->cart_total['sub_total'];
		}
		// $data['total_charges'] = $this->total_charges;
		// $data['total_item'] = $this->total_item;
		// debug($data); 

        $this->load->vars($data); // Make it available in views
    } 
}
