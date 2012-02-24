<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Resume extends Controller {

	//php 5 constructor
	function __construct() {
		parent::Controller();
	}
	
	//php 4 constructor
	function Resume() {
		parent::Controller();
	}
	
	function index() {
			$data = array('MainContent'=>'resume/index', 'AjaxContent'=>false);
			
			$this->load->view(TEMPLATE_PATH,  $data);				
	}

}

?>