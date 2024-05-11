<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

     public function __construct() {
        parent::__construct();
        // Your initialization tasks or setup operations go here
        // For example, loading libraries, models, helpers, etc. 
        $this->load->model('CategoryModel');
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
	{
		 

		$this->form_validation->set_rules('cate_name', 'Category Name', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			
			$data['categories'] = $this->CategoryModel->all_category();
			$this->load->view('category',$data); 
		} else { 
			$post= $this->input->post();
			$config = array('upload_path' => "./assets_front/images/category",
							'allowed_types' => "gif|jpg|png|jpeg");
			$this->load->library('upload', $config);
			if($this->upload->do_upload('cat_image')){
				$data = $this->upload->data();  
				$post['cat_image'] = $data['raw_name'].$data['file_ext'];
			}else{
				$error = $this->upload->display_errors();
				log_message('error', $error); // Log the error message
				echo $error; // Display the error message
			}
			$check = $this->CategoryModel->add_category($post);
			if($check){
				$this->session->set_flashdata('success','Category Added Successfully');
				
			}
			else{
				$this->session->set_flashdata('error','Something went wrong');
				 
			}
			redirect('Category');
		} 
	}
	function get_sub_cat(){ 
		$cat_id = $this->input->post('cat_id');
		$option ='';
		if($cat_id){
		$data = $this->CategoryModel->get_sub_cat($cat_id); 
			foreach ($data as $key => $value) {
				$option=$option."<option value='".$value->cate_id."'>".$value->cate_name."</option>";
			}
		}
		echo ($option);
	}
}
