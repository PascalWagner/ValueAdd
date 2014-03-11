<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends MY_Controller {
        
        public function index($renderData=""){	

                $this->_render('pages/home',$renderData);
	}
        
}