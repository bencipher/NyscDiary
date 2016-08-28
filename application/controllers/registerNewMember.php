<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class RegisterNewMember extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	// Class constructor
	function __construct()
       {
       	   parent:: __construct();
       }


	public function index()
	{
		extract($_POST);
 
         if(!empty($firstName) && !empty($lastName))
    	 {
            
    	 	 $details =  array('surname' 		=> $firstName ,
    	 	                   'lastName'		=> $lastName, 
    	 	                   'dob'			=> $dob,
    	 	                   'email'			=> $email,
    	 	                   'phone'			=> $phone,
    	 	                   'batch' 			=> $batch,
    	 	                   'username' 		=> $username,
    	 	                   'password'		=> $password,
    	 	                   'state_id' 		=> $stateOfDeployment,
    	 	          		   'yearOfService'  => $yearOfService
    	 	 	              );
    	 	 //write my on model and method for updating database $this->nyscDB->insertIntoAnyTable($details, 'corper');
    	     $this->load->model('nyscDB');
             $this->db->insert('corper', $details);
    	 	
    	 	 redirect('/profile');
    	 	 
    	 }
    	 else
    	 {
  	 	   echo '<script language="Javascript"> alert("Empty Field(s) Found!!!") </script>';
    	 	redirect('/register');
    	 } 
    }
}