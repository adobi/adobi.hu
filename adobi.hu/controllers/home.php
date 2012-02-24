<?php  

	class Home extends Controller {
		
		/*
		public function Index() {
			
			parent::Controller();
		}
		*/
		public function index() {
			
			//$this->load->view('home/index');
			
			$data = array('MainContent'=>'home/index', 'AjaxContent'=>false);

			$this->load->view(TEMPLATE_PATH, $data);			
		}
	}

?>