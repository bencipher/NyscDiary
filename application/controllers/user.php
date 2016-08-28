<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class User extends Web_Controller 
{
	function __construct()
     {
       parent:: __construct();
	   
	   $this->load->model('user_model');
     }

  public function index()
	{
	
		if($this->input->post('submit')){
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == TRUE)
          {
			  
		       $user = $this->user_model->authenticate();
			   if(count($user))
			   {
				  echo "here";
		          exit;
		   
				   
                 $this->session->userdata('userid',$user->userid);
                 $this->session->userdata('username',$user->username);
                 $this->session->userdata('loggedin',true);
				 redirect('wall');
			   }
			   else
			   {
				 $this->session->flash_data('error','Invalid username or password');
				 redirect('user');
			   }
          }
        else
          {
            $this->data["message"] = get_message(validation_errors());
          }
		  
		}

       
	   $this->load->view('login',$this->data); 
		
	}
	
	
   	public function logoutMethod()
	{
         $content = array('login_status' => 0 );
         $this->nyscDB->updateAnyTableRow('username', $username, $content, 'corper');  // update login
         
         redirect('user') ;
	}

}