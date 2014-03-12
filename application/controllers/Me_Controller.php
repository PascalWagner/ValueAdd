<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Me_Controller extends MY_Controller {
        
        public function index($renderData=""){	
                
           if($this->session->userdata('logged_in'))
           {
                 $session_data = $this->session->userdata('logged_in');
                 $renderData['username'] = $session_data['username'];                
                 $this->_render('pages/me_view',$renderData);
                 
                      
           }
           else
           {
             //If no session, redirect to login page
             redirect('Login_Controller', 'refresh');
           }               
	}   
        
        
         

}