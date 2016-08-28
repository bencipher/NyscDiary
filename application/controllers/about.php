<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Web_Controller 
{
	function __construct()
      {
       	   parent:: __construct();
      }

	public function index()
	{
        
		$this->data["page"] = "about";
		$this->load->view('template/_template',$this->data);
		
	}
}