<?php
defined("BASEPATH") OR exit("No direct script allowed");



class HomeModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function get_banner(){
		try {
			$q = $this->db->where('status','1')->order_by('id','desc')->get('ec_banner');
			if($q->num_rows()) {
				 
				return $q->result();
			} else {
				return false;
			}
		} catch (Exception $e) {
			// Handle the exception here
			log_message('error', $e->getMessage()); // Log the error message
			return false; // Return false indicating failure
		}
	}
	public function get_categ($limit=''){
		try {
			$q = $this->db->where('status','1')->order_by('id','asc')->get('ec_category', $limit);
			if($q->num_rows()) {
				 
				return $q->result();
			} else {
				return false;
			}
		} catch (Exception $e) {
			// Handle the exception here
			log_message('error', $e->getMessage()); // Log the error message
			return false; // Return false indicating failure
		}
	}
	public function get_products($slug=''){
		try {
			$q = $this->db->where('status','1')->order_by('id','desc')->get('ec_product');
			if($q->num_rows()) {
				 
				return $q->result();
			} else {
				return false;
			}
		} catch (Exception $e) {
			// Handle the exception here
			log_message('error', $e->getMessage()); // Log the error message
			return false; // Return false indicating failure
		}
	}
	public function category_name($id){
		$q = $this->db->where('cate_id',$id)->get('ec_category');
		if($q->num_rows()) {
				 
			return $q->row()->cate_name;
		} else {
			return false;
		}
	} 
	public function product_details($slug){
		$q = $this->db->where('slug',$slug)->get('ec_product');
		if($q->num_rows()) {
			return $q->row();
		} else {
			return false;
		}
	}
	public function get_category_nav($parent_id=''){
		$q = $this->db->where(['status'=>1,"parent_id"=>$parent_id])->get('ec_category');
		if($q->num_rows()) {
			return $q->result();
		} else {
			return false;
		}
	}
	public function get_subcat_check($cate_id){
		$q = $this->db->where(['status'=>1,"parent_id"=>$cate_id])->get('ec_category');
		// print_r($this->db->last_query());
		if($q->num_rows()) {
			return true;
		} else {
			return false;
		}
		 
	}
	 
	
	 
}
