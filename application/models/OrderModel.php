<?php
defined("BASEPATH") OR exit("No direct script allowed");



class OrderModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
		
        $this->load->database();
    }
	
	public function get_orders(){
		 
		$exist = $this->db->where(array('status'=>1))->get('ec_order');
		if($exist->num_rows()){
			return $exist->result();
		}else{
			return false;
		}
	}
	public function get_pending_orders(){
		 
		$exist = $this->db->where(array('status'=>1,'order_status'=>'pending'))->get('ec_order');
		if($exist->num_rows()){ 
			return $exist->result();
		}else{
			
			return false;
		}
		 
	}
	public function get_order_detail($id=''){
		 
		$exist = $this->db->where(array('status'=>1,'order_id'=>$id))->get('ec_order');
		if($exist->num_rows()){
			return $exist->result();
		}else{
			return false;
		}
	}
	public function order_status_change($array=[],$where=[]){
			return $this->db->where($where)->update('ec_order', $array);
		}
	public function order_track($search='',$limit=1){
		if($search){
			 
			$this->db->where("(order_id = '$search' OR cust_email = '$search' OR cust_mobile = '$search')");

		}
		$this->db->order_by('order_date', 'asc');
		$this->db->limit($limit);
		$q = $this->db->get('ec_order');
		// print_r($q);
		if($q->num_rows()){ 
			return $q->result();
		}
		return false;
	}
	public function track_order($val){
		 
		$exist = $this->db->where(array('status'=>1,'order_id'=>$id))->get('ec_order');
		if($exist->num_rows()){
			return $exist->result();
		}else{
			return false;
		}
	}
	public function add_to_cart($post){ 
		$user_id = $this->session->userdata('user_id');
		$exist = $this->db->where(array('user_id'=>get_userid($this->session),'pro_id'=>$post['pro_id']))->get('ec_cart');
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
			$q = $this->db->where(["pro_id" => $value, "user_id" => get_userid($this->session)])->update('ec_cart', ['pro_qty' => $post['up_qty'][$key]]);
			// print_r($this->db->last_query());
		}
		return true;
	}
	public function delete_product($id){
		$q = $this->db->where(["pro_id" => $id, "user_id" => get_userid($this->session)])->delete('ec_cart');
		if($q){
			return true;
		}
		return false;
	}
	public function cart_total(){
		$res = false;
		$q = $this->db->select('pro_price as total_price,pro_qty as total_item')->where(['user_id'=>get_userid($this->session),'status'=>1])->get('ec_cart');
		if($q->num_rows()){
			$result = ( $q->result());
			$total_charges =$total_item= 0;
			foreach ($result as $res) {
				// print_r($res);exit;
				$total = $res->total_price; 
				$total_item += $res->total_item; 
				$total_charges += $res->total_item*$total; 
				
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
	
	 
}
