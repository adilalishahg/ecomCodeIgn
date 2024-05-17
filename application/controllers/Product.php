<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

     public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc. 
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{	$this->form_validation->set_rules('prod_id', 'product id', 'required|trim');
		$this->form_validation->set_rules('pro_name', 'product name', 'required|trim');
		$this->form_validation->set_rules('category', 'product category', 'required|trim');
		$this->form_validation->set_rules('brand', 'brand', 'required|trim');
		$this->form_validation->set_rules('featured', 'featured', 'required|trim');
		$this->form_validation->set_rules('highlights', 'highlights', 'required|trim');
		$this->form_validation->set_rules('description', 'description', 'required|trim');
		$this->form_validation->set_rules('stock', 'stock', 'required|trim');
		$this->form_validation->set_rules('mrp', 'mrp', 'required|trim');
		$this->form_validation->set_rules('selling_price', 'selling price', 'required|trim');
		if(empty($_FILES['pro_main_image']['name'])){

			$this->form_validation->set_rules('pro_main_image', 'pro main image', 'required|trim');
		}
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['categories'] = $this->CategoryModel->all_category();
			if($this->session->userdata('prod_id')!=''){
				$prod_id = $this->session->userdata('prod_id');
			}else{
				$prod_id=mt_rand(1111,9999);
				$this->session->set_userdata('prod_id',$prod_id);
			}
			$data['prod_id'] = $prod_id; 
			$this->load->view('product',$data); 
		} else { 
			$post= $this->input->post(); 
			$config = array('upload_path' => "./assets_front/images/products",
							'allowed_types' => "gif|jpg|png|jpeg");
			$this->load->library('upload', $config);
			if($this->upload->do_upload('pro_main_image')){
				$data = $this->upload->data();  
				$post['pro_main_image'] = $data['raw_name'].$data['file_ext'];
			}else{
				$error = $this->upload->display_errors();
				log_message('error', $error); // Log the error message
				echo $error; // Display the error message
			}
			// print_r($post);exit;
			$check = $this->ProductModel->add_product($post); 
			if($check){
				$this->session->set_flashdata('success','Product Added Successfully');
				
			}
			else{
				$this->session->set_flashdata('error','Something went wrong');
				 
			} 
			redirect('product');
		} 
	}
	public function product_by_cat($slug1,$slug2=''){
		$slug=$slug1;
		if(!empty($slug2)){
			$slug=$slug2;
		} 
		$cat_id =  $this->ProductModel->fetch_cat($slug);
		 
		$product =  $this->ProductModel->fetch_product($cat_id);
		 
		$data['product'] = $product;
		$data['cat_id'] = $cat_id;
		$data['slug'] = $slug1;
		$slug2!==''?$data['slug2'] = $slug2:''; 
		$this->load->view('front/products',$data);
	}
	public function all(){
		// debug($data);
		$data['category'] = (get_categories_all());
		$product =  $this->ProductModel->fetch_product(); 
		 
		$data['product'] = $product; 
		// debug($data);exit;
		$this->load->view('front/products-2',$data);
	}
	public function search(){
		$params = ($this->input->get());
		$search_array= [];
		if(isset($params['search_item'])&&!empty($params['search_item'])){
			$search_array['pro_name'] =  $params['search_item']; 
		}
		if(isset($params['category'])&&!empty($params['category'])){
			$search_array['category'] =$search_array['sub_category'] =  $params['category']; 
		}
		if(empty($search_array)){
			redirect('products/all');
		}else{
			$search_array['product'] = $this->ProductModel->fetch_product_search($search_array);
			$this->load->view('front/products',$search_array);
		// debug($product);
		}

		// print_r($search_array);exit;
	}
	public function filter_search_ajax(){
		$params = $this->input->post()['search_array'];
		// debug($params);
		$search_array= [];
		foreach ($params as $key => $value) {
			echo "<pre/>";
			 print_r($value);
		} 
		// print_r($search_array);exit;
	}
}
