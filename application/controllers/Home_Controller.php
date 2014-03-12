<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends MY_Controller {
        
        public function index($renderData=""){	
                
           if($this->session->userdata('logged_in'))
           {
                 $session_data = $this->session->userdata('logged_in');
                 $renderData['full_name'] = $session_data['full_name']; //added
                 $this->_render('pages/home_view',$renderData);
                 
                      
           }
           else
           {
             //If no session, redirect to login page
             redirect('Login_Controller', 'refresh');
           }               
	}   
        
        
         function logout()
         {
           $this->session->unset_userdata('logged_in');
           session_destroy();
           redirect('Home_Controller', 'refresh');
         }
         

}