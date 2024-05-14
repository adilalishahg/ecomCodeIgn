<?php
defined("BASEPATH") OR exit("No direct script allowed");



class ProductModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function add_product($post){
		try {
			$post['added_on'] = date('d M, Y'); 
			$post['slug'] =generate_slug($post['pro_name']); 
			$q = $this->db->insert('ec_product',$post); 
	
			if($q) {
				$this->session->unset_userdata('prod_id');
				return true;
			} else {
				return false;
			}
		} catch (Exception $e) {
			// Handle the exception here
			log_message('error', $e->getMessage()); // Log the error message
			return false; // Return false indicating failure
		}
	}
	public function fetch_cat($slug=''){
		$q = $this->db->select('cate_id')->where('slug',$slug)->get('ec_category');
		if($q->num_rows()>0){
			return $q->row()->cate_id;
		}
	}
	public function fetch_product_search($params=[]){
		 
		if(isset($params['pro_name'])){
			// $this->db->where(['pro_name'=>$params['pro_name']]);
			$where = "pro_name LIKE '%".$params['pro_name']."%'";
			$this->db->where($where); 
		}
		if(isset($params['pro_name'])&&isset($params['category'])){
			$this->db->like(['category'=>$params['category']]);
			$this->db->or_like(['sub_category'=>$params['category']]);
		}
		if(!isset($params['pro_name'])&&isset($params['category'])){
			$this->db->like(['category'=>$params['category']]);
			$this->db->or_like(['sub_category'=>$params['category']]);
		}
		$q = $this->db->get('ec_product');
		if($q->num_rows()){
			 return $q->result();
			 //  echo $this->db->last_query();exit;
		}
		
		return false;
	}
	public function fetch_product($cat_id=''){
		
			$this->db->where(['status'=>1]);
			if($cat_id){
				$this->db->like(['category'=>$cat_id,]);
				$this->db->or_like(['sub_category'=>$cat_id,]);
			}
			$q = $this->db->get('ec_product');
		if($q->num_rows()){
			return $q->result();
		}
		return false;
	} 
}
