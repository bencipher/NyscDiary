<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class insertNewPost extends CI_Controller 
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
		extract($_POST);

         if(!empty($postTitle) && !empty($postContent) && !empty($postExcerpt)) 
         	// && (!empty($blogPicture1) || !empty(blogPicture2))
    	 {
    	 	 $blogPicture1 = $this->nyscDB->do_upload();
    	 	 $details =  array('title' 					=> $postTitle ,
    	 	                   'content'				=> $postContent, 
    	 	                   'postExcerpt'			=> $postExcerpt,
    	 	                   'blog_picture_1'			=> $blogPicture1,
    	 	                   'blog_picture_2'			=> $blogPicture2
    	 	 	              );
    	  //   $this->load->model('nyscDB');
              //THIS IS WHERE THE TOP IS, I NEED TO CREATE MY DB METHODS
    	 	 $this->nyscDB->insertIntoAnyTable($details, 'blogpost');
    	 	 redirect('/blog');
    	 }
    	 else
    	 {
  	 	   echo '<script language="Javascript"> alert("Empty Field(s) Found!!!") </script>';
    	 	redirect('/register');
    	 } 		
	}
}