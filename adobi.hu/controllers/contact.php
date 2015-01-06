<?php  

class Contact extends CI_Controller {
	//php 5 constructor
	function __construct() {
		parent::__construct();
	}

	
	public function index() {
		
		$data = array('MainContent'=>'contact/index', 'AjaxContent'=>false);
		
		if($_POST) {
		
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Name','trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');	
			
			if($this->form_validation->run()) {
				
				$data['Message']='Success';
				
				$this->load->library('email');
				
				$this->email->from($this->input->post('email'), $this->input->post('name'));
				$this->email->to('hello@adobi.hu');
				
				$this->email->subject('adobi.hu contact email');
				$this->email->message($this->input->post('message'));
				
				$this->email->send();
				
			}
			else {
				$data['Message'] = 'Error';
			}
		}
		else {
			
		}
		$this->load->view(TEMPLATE_PATH,  $data);
		
	}
	}

?>