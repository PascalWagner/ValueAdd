<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Register_Controller extends My_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->load->model('user_model', 'user');
        }


        public function registration()
         {
          $this->load->library('form_validation');

          // field name, error message, validation rules
          $this->form_validation->set_rules('full_name', 'Your Full Name', 'trim|required');
          $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

          if($this->form_validation->run() == FALSE)
          {
              echo validation_errors(); 
          }
          else
          {
           $this->user->add_user();
           redirect('Register_Controller/registerSuccess', 'refresh');
          }
         }
         
         
         
         
         public function registerSuccess()
         {
             $this->_render('pages/registerSuccess_view');
         }

   
}