<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends MY_Controller {
        
        public function index($renderData=""){	

		$this->title = "Needzilla";
		$this->keywords = "Needzilla";
       
                $this->_render('pages/home',$renderData);
	}
        
       



}