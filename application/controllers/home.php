<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class Home extends Web_Controller {
	
	// Class constructor
	function __construct()
       {
       	   parent:: __construct();
		   $this->load->model('nyscDB');
       }


	public function index()
	{
		
		$this->data["page"] = "home";
		$this->load->view('template/_template',$this->data);

	}


	public function uploadImage() 
	{
		
		$newExperience = $this->input->post('postExperience');
		if ($this->input->post('upload')) 
		{
	
			$newPath = $this->nyscDB->do_upload();
			$details =  array( 'shortText'=> $newExperience,'pictureText' => $newPath, 'corper_id'=> $_SESSION['userid']);
		    $this->nyscDB->insertIntoAnyTable($details, 'experience');		   
		    
		}	
		else
		{  
			 if(!empty($newExperience))
			 {
			    $details =  array('shortText'=> $newExperience,'corper_id'=> $_SESSION['userid']);
				$this->nyscDB->insertIntoAnyTable($details, 'experience');	
				 
			 }
		}
		
	}
	
}
