<?php  

	class Home extends Controller {
		
		
		public function Home() {
			
			parent::Controller();
		}
		
		public function index() {
			
			//$this->load->view('home/index');
			
			$data = array('MainContent'=>'home/index');
			
			$this->load->view(TEMPLATE_PATH, $data);
		}
	}

?>