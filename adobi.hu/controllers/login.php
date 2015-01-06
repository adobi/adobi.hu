<?php

	class Login extends CI_Controller {
		
		public function Login() {
			
			parent::Controller();
		}
	
		public function index() {
			$data = array('MainContent'=>'login/index', 'AjaxContent'=>false);
			if($_POST) {
				$this->load->helper('form');
				$this->load->library('form_validation');

				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if($this->form_validation->run()) {

					$this->load->model('Users', 'users');

					$isOK = $this->users->signIn($this->input->post('username'), $this->input->post('password'));

					!empty($isOK) ? redirect('user/index') : $this->load->view(TEMPLATE_PATH, array('MainContent'=>'login/index'));
					
				}
				else {
					
					$data['Message'] = 'Error';
				}
			}
			
			$this->load->view(TEMPLATE_PATH, $data);
		}
		
		public function signin() {
		

		}
		
		public function signout() {
			$this->session->unset_userdata('CurrentUser');

			redirect(base_url().'home');			
		}
	}

?>