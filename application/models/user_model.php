<?php  if(! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
   function authenticate() {
	
	   $data["username"] = $this->input->post('username');
	   $data["password"] = $this->input->post('password');

	   $this->db->where($data);
	   $user =  $this->db->get('corper')->row();
	   
	   print($user);
	   exit;
	   
	   
	}
	
	
	
	function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		////////just testing
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}
	
	function get_images() {
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}
		
		return $images;
	}
	
}



