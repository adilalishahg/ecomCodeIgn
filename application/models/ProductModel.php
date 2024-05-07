<?php
defined("BASEPATH") OR exit("No direct script allowed");



class ProductModel extends CI_Model
{ 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function add_category($post){
		try {
			$post['added_on'] = date('d M, Y');
			$post['cate_id'] = mt_rand(1111,9999);
			$q = $this->db->insert('ec_category',$post); 
	
			if($q) {
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
	public function all_category(){
		$q = $this->db->where(['status'=>1,"parent_id"=>''])->get('ec_category');
		if($q->num_rows()){
			return $q->result();
		}
	}	
	
    // public function getCategory()
    // {
    //     $query = $this->db->get('category');
    //     return $query->result_array();
    // }

    // public function getCategoryById($id)
    // {
    //     $query = $this->db->get_where('category', array('id' => $id));
    //     return $query->row_array();
    // }
}
