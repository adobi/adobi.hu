<?php

	class Logout extends CI_Controller {
		
		
		public function Logout() {
			
			parent::Controller();
			
		}
		
		public function index() {
			
			//if($this->session->userdata('CurrentUser')) {
				$this->session->unset_userdata('CurrentUser');
				
				redirect(base_url().'home');
			//}
		}
	}

?>