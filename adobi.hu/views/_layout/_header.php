<!DOCTYPE html>
<html lang="en">
  <head>
	<title>&laquo; adobi &raquo;</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="I'm Dobi Attila, a web developer from Debrecen" />
		<meta name="keywords" content="Dobi Attila debrecen, web developer debrecen, web development debrecen, php debrecen, javascript debrecen" />
		<meta name="author" content="Dobi Attila" />    	
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />		
		<meta name="google-site-verification" content="7xn52P4_OQD2-me0rq4p86dvEgUhxzggnwcIAnd5xX0" />
		<link rel="stylesheet" href="<?= base_url(); ?>css/reset.css" type="text/css" media="screen, print" charset="utf-8" />
		<link rel="stylesheet" href="<?= base_url(); ?>css/page.css" type="text/css" media="screen, print" charset="utf-8" />		
		
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8">
			google.load("jquery", "1.3.2");
		</script>		
		
		<script type="text/javascript" charset="utf-8" src = "<?= base_url(); ?>js/jquery.easing.js"></script>
		<script type="text/javascript" charset="utf-8" src = "<?= base_url(); ?>js/jquery.jcarousellite.js"></script>
		<script type="text/javascript" charset="utf-8" src = "<?= base_url(); ?>js/jquery.tipsy.js"></script>
		<script type="text/javascript" charset="utf-8" src = "<?= base_url(); ?>js/jquery.notify.js"></script>
		<script type="text/javascript" charset="utf-8" src = "<?= base_url(); ?>js/functions.js"></script>
		
	</head>
	
	<body <?= isset($DisplayHeader) ? 'style = "border-top: 5px solid #FF6633"' : "" ?>>
		<div id="container">
			<div id="header">
				
				<?php if(isset($DisplayHeader)) : ?>
					<a href = "<?= base_url(); ?>portfolio" id = "header-title">project + work</a>
					<ul id = "header-menu">
						<li class = "selected"><a href="javascript:void(0);" data="{id:6}">kassayzsuzsa.com</a></li>
						<li><a href="http://adobi.github.com" target="_blank">github repos</a></li>
						<li><a href="javascript:void(0);" data = "{id:1}">colors</a></li>
						<li><a href="javascript:void(0);" data = "{id:2}">error handler</a></li>
						<li><a href="javascript:void(0);" data = "{id:3}">server admin</a></li>
						<li><a href="javascript:void(0);" data = "{id:4}">est-vest.ro</a></li>
					</ul>
					
					
				<?php endif; ?>
				
			</div> <!-- header -->
			
			<div class="content">
			
