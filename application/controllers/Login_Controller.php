<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Controller extends MY_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index($renderData="")
 { 
   $this->_render('pages/login_view',$renderData);

 }

}

?>
