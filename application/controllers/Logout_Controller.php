<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Logout_Controller extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }



 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Home_Controller', 'refresh');
 }

}

?>
