<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin_Controller extends CI_Controller {

 function __construct()
 {
   parent::__construct();
//$this->load->model('user','',TRUE);
   
   $this->load->model('user_model','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     redirect('Login_Controller', 'refresh');
   }
   else
   {
     //Go to private area
       redirect('Home_Controller', 'refresh');

   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user_model->login($username, $password);
    
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'user_id' => $row->user_id,
         'username' => $row->username,
         'full_name' => $row->full_name //Added
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>