<?php
defined("BASEPATH") OR exit("No direct script allowed");



class CheckoutModel extends CI_Model
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
				$data['pro_price'] = $prod->selling_price;
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

	public function cart_update($post){ 
		// debug($post); 
		foreach ($post['up_pro_id'] as $key => $value) { 
			$q = $this->db->where(["pro_id" => $value, "user_id" => $this->get_userid()])->update('ec_cart', ['pro_qty' => $post['up_qty'][$key]]);
			// print_r($this->db->last_query());
		}
		return true;
	}
	public function delete_product($id){
		$q = $this->db->where(["pro_id" => $id, "user_id" => $this->get_userid()])->delete('ec_cart');
		if($q){
			return true;
		}
		return false;
	}
	public function cart_total(){
		$res = false;
		$q = $this->db->select('pro_price as total_price,pro_qty as total_item')->where(['user_id'=>$this->get_userid()])->get('ec_cart');
		if($q->num_rows()){
			$result = ( $q->result());
			$total_charges = 0;
			foreach ($result as $res) {
				// print_r($res);exit;
				$total = $res->total_price; 
				$total_item = $res->total_item; 
				$total_charges += $total_item*$total; 
				
			}
			if($total>MIN_LIMIT_FOR_CHARGES){
				$res= array('total_item'=>$total_item,'sub_total'=>$total_charges,'grand_total'=>$total+0,'total_charges'=>$total_charges+0,'delivery'=>0);
			}else{
				$res= array('total_item'=>$total_item,'sub_total'=>$total_charges,'grand_total'=>$total+DELIVERY_CHARGES,'total_charges'=>$total_charges+DELIVERY_CHARGES,'delivery'=>DELIVERY_CHARGES); 
			}
			 

		}  
		// debug($res);
		return $res;
		 
	}

	public function checkOut_person_Detail($user){
		
		if($this->db->insert('ec_users',$user))
		{
			return true;
		}else{
			return false;
		}
	}
	public function create_order($order){
		
		if($this->db->insert('ec_order',$order))
		{
			return true;
			 
		}else{
			return false;
		}
	}
	public function cart_order_update($cart,$status){
		foreach ($cart  as $value) { 
			// debug($value);

				$q = $this->db->where(["pro_id" => $value->pro_id, "user_id" => $value->user_id, "cart_id" => $value->cart_id])->update('ec_cart', ['status' => $status]);
				// print_r($this->db->last_query());
			}
		return true;
	}
 
	
	 
}
