<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));/// not needed but included sha....
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
               
                $newName                        = $_SESSION['userid'].'_'.time();
                $config['upload_path']          = base_url('images/photos');
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']            = $newName;
                $config['file_ext']             = '.jpg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                                echo $data['upload_data']['full_path'];
                      
                       //  // return $config['upload_path'].$data;
                       // // $fullName   =       array('full_path'         => $this->upload_path.$this->file_name);
                       // exit();
                        $this->load->view('upload_success', $data);
                }
        }
}
?>
