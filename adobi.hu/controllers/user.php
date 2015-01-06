<?php

	class User extends CI_Controller {
	
		public function User() {
			
			parent::Controller();
			
			if(!$this->session->userdata('CurrentUser')) {
				
				redirect('login/index');
			}
		}
		
		public function index() {
			
			$this->load->view(TEMPLATE_PATH, array('MainContent'=>'user/index', 'AjaxContent'=>false, 'CurrentUser'=>$this->session->userdata('CurrentUser')));
		}
	}

?>