<?php  if(! defined('BASEPATH')) exit('No direct script access allowed');

   class nyscDB extends CI_Model
   {
    var $gallery_path;
    var $gallery_path_url;
       function __construct()
       {
       	   parent:: __construct();
           $this->gallery_photo_path = realpath(APPPATH . '../images/photos');
           $this->gallery_photo_path_url = base_url().'images/photos';

           $this->gallery_blog_path = realpath(APPPATH . '../images/blogs');
           $this->gallery_blog_path_url = base_url().'images/blogs';

           $this->gallery_profile_path = realpath(APPPATH . '../images/profile');
           $this->gallery_profile_path_url = base_url().'images/profile';
       }
    
    function getAnyTableContentDesc($table)
     {
       $sql = 'select * from '.$table.' order by id desc';
       return $this->db->query($sql) ;
     }

     function getAnyTableContent($table)
     {
     	 return $this->db->get($table) ;
     }
     function getAnyTableRow($idColumnName, $rowID, $table)
     {
     	if(!empty($rowID))
     	{
     		return $this->db->get_where($table, array($idColumnName=> $rowID));
      }
     }
     function updateAnyTableRow($idColumnName, $rowID, $content, $table)
     {
     	$this->db->where($idColumnName, $rowID);
     	$this->db->update($table, $content);
     }
     
     function deleteAnyRowFromAnyTable($idColumnName, $rowID, $table)
     {
     	$this->db->delete($table, array($idColumnName=> $rowID));
     }
      
      function clearTableContent($table)
      {
      	$this->db->empty_table($table);
      }
     
     function insertIntoAnyTable($content, $table)
     {
      	 $this->db->insert($table, $content);
     }
     function insertBatchArrayIntoTable($arrayOfAssocArray, $table)
     {
     	 $this->db->insert_batch($table, $arrayOfAssocArray);
     }

    function do_upload() 
    {    
      $config = array(
        'allowed_types' => 'jpg|jpeg|gif|png',
        'upload_path' => $this->gallery_photo_path,
        'max_size' => 2000
      );
      
      $this->load->library('upload', $config);
      $this->upload->do_upload();
      $data = $this->upload->data();
      
      // $config = array(
      //   'source_image' => $image_data['full_path'],
      //   'new_image' => $this->gallery_path . '/thumbs',
      //   'maintain_ration' => true,
      //   'width' => 150,
      //   'height' => 100
      // );
      
     // $this->load->library('image_lib', $config);
      return  $data['file_name'];
     // $this->image_lib->resize();
      
  }

  function do_upload_multiple($file1, $file2) 
    {   
      if (!empty($file1) || !empty($file2)) 
        { 
              if (!empty($file1))     
                    {
                        $config = array(
                        'allowed_types'        => 'jpg|jpeg|gif|png',
                        'upload_path'          => $this->gallery_blog_path,
                        'max_size'             => 2000,
                        'max_width'            => 1024,
                        'max_height'           => 768,
                        'overwrite'            => TRUE,
                        'file_name'            => $filename
                        );
                        $this->upload->initialize($config); 
                        $this->load->library('file1', $config);
                        $this->upload->do_upload();
                        return $this -> gallery_blog_path;
                    } 

              if (!empty($file2))     
                      {
                          $config = array(
                          'allowed_types'        => 'jpg|jpeg|gif|png',
                          'upload_path'          => $this->gallery_blog_path,
                          'max_size'             => 2000,
                          'max_width'            => 1024,
                          'max_height'           => 768,
                          'overwrite'            => TRUE,
                          'file_name'            => $filename
                          );
                          $this->upload->initialize($config);
                          $this->load->library('file2', $config);
                          $this->upload->do_upload();
                          return $this -> gallery_blog_path; 
                      }
          }
  }
  
  function get_images() {
    
    $files = scandir($this->gallery_photo_path);
    $files = array_diff($files, array('.', '..', 'thumbs'));
    
    $images = array();
    
    foreach ($files as $file) {
      $images []= array (
        'url' => $this->gallery_photo_path_url . $file,
        'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
      );
    }
    
    return $images;
  }

   }

 ?>
