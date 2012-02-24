<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

	if(!function_exists('go_back')) {
		
		function go_back($url = '') {
			
			return '<span class = "left-arrow">&larr;&nbsp;</span>' . anchor($url, 'Go back') . '<br /><br />';
		}
	}

?>