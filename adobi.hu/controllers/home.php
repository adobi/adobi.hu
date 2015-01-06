<?php  

	class Home extends CI_Controller {
		
		//php 5 constructor
		function __construct() {
			parent::__construct();
		}

		public function index() {
			
			//$this->load->view('home/index');
			
			$data = array('MainContent'=>'home/index', 'AjaxContent'=>false);

			$this->load->view(TEMPLATE_PATH, $data);			
		}
	}

?>