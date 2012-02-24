<?php
	
	if(!isset($AjaxContent) || !$AjaxContent)
		$this->load->view(TEMPLATE_HEADER);

	$this->load->view($MainContent);
	
	if(!isset($AjaxContent) || !$AjaxContent)
		$this->load->view(TEMPLATE_FOOTER);
	
?>