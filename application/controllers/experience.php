<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class Experience extends CI_Controller 
{

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

		$data['css'] = $this->load->view('global/cssfiles','',TRUE);
		$data['header'] = $this->load->view('global/header','',TRUE);
		$data['footer'] = $this->load->view('global/footer','',TRUE);
		$data['experienceData'] = $this->nyscDB->getAnyTableContent('experience'); 
       if ($_SESSION['loginstatus']==1)
    	{

        	$this->load->view('experience', $data);
    	}

    	else
    	{
    		redirect('/user') ;
    	}
	}
}