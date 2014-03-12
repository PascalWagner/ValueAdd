<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends MY_Controller {
        
        public function index($renderData=""){	
                
           if($this->session->userdata('logged_in'))
           {
                 $session_data = $this->session->userdata('logged_in');
                 $renderData['username'] = $session_data['username'];                
                 $this->_render('pages/home',$renderData);
                 
                      
           }
           else
           {
             //If no session, redirect to login page
             redirect('LoginController', 'refresh');
           }               
	}   
        
        
         function logout()
         {
           $this->session->unset_userdata('logged_in');
           session_destroy();
           redirect('home', 'refresh');
         }
}