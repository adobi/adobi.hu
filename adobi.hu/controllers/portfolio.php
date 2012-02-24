<?php 

	if (! defined('BASEPATH')) exit('No direct script access');
	
	class Portfolio extends Controller {
	
		//php 5 constructor
		function __construct() {
			parent::Controller();
		}
		
		//php 4 constructor
		function Portfolio() {
			parent::Controller();
		}
		
		function index() {
			$data = array('MainContent'=>'portfolio/index', 'AjaxContent'=>false);
			$data['DisplayHeader'] = true;
			$data['DisplayFooter'] = true;
			$this->load->view(TEMPLATE_PATH,  $data);		
		}
	
	}

?>