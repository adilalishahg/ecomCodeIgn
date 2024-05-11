<?php
defined("BASEPATH") OR exit("No direct script allowed");



class CartModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function get_userid(){
		return   $this->session->userdata('user_id');
	}
	public function get_cart(){
		 
		$exist = $this->db->where(array('user_id'=>$this->get_userid()))->get('ec_cart');
		if($exist->num_rows()){
			return $exist->result();
		}else{
			return false;
		}
	}
	public function add_to_cart($post){ 
		$user_id = $this->session->userdata('user_id');
		$exist = $this->db->where(array('user_id'=>$this->get_userid(),'pro_id'=>$post['pro_id']))->get('ec_cart');
		if($exist->num_rows()){
		    return false;
		}else{
			$q = $this->db->select('pro_name,selling_price,mrp,slug,pro_main_image')->where('prod_id',$post['pro_id'])->get('ec_product');
			if($q->num_rows()){
				$prod = ($q->row());
				$data['cart_id'] = rand(1111,9999);
				$data['user_id'] = $this->session->userdata('user_id');
				$data['pro_id'] = $post['pro_id'];
				$data['pro_qty'] = $post['prod_qty'];
				$data['pro_name'] = $prod->pro_name;
				$data['pro_price'] = $prod->mrp;
				$data['slug'] = $prod->slug;
				$data['pro_image'] = $prod->pro_main_image;
				$data['added_on'] = date('Y-m-d');
				$this->db->insert('ec_cart',$data);
				return true;
			}else{
				return false;
			} 
		}

	}
	
	 
}
