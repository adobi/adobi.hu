<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Resume extends CI_Controller {

	//php 5 constructor
	function __construct() {
		parent::__construct();
	}

	function index() {
			$data = array('MainContent'=>'resume/index', 'AjaxContent'=>false);
			
			$this->load->view(TEMPLATE_PATH,  $data);				
	}

}

?>