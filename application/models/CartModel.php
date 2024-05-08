<?php
defined("BASEPATH") OR exit("No direct script allowed");



class CartModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function add_to_cart($post){
		$q = $this->db->select('pro_name,selling_price,mrp,slug,pro_main_image')->where('prod_id',$post['prod_id'])->get('ec_product');
		if($q->num_rows()){
			$prod = ($q->row());
			$data['cart_id'] = rand(1111,9999);
			$data['user_id'] = $this->session->userdata('user_id');
			$data['prod_id'] = $post['prod_id'];
			$data['prod_qty'] = $post['prod_qty'];
			$data['pro_name'] = $prod->pro_name;
			$data['prod_price'] = $prod->mrp;
			$data['slug'] = $prod->slug;
			$data['pro_image'] = $prod->pro_main_image;
			$data['added_on'] = date('Y-m-d');
		}else{
			return false;
		} 
		

	}
	
	 
}
