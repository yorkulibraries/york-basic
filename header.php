<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $exhibit->title; ?> | <?php echo settings('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/blueprint/screen')); ?>" />
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/theme')); ?>" />
<link rel="stylesheet" media="print" href="<?php echo html_escape(css('print')); ?>" />
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/slider')); ?>" />


<!-- javascript -->
<?php echo exhibit_builder_exhibit_js('js/jquery.min') ?>
<?php echo exhibit_builder_exhibit_js('js/tabs') ?>
<?php echo exhibit_builder_exhibit_js('js/slider') ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

</head>
<body>
	
	 <div id="header">
		<div class="container">
			<div id="logo">
	        	<a href="index.html"><img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/default_logo.png')); ?>"></a>
	        </div>

			<ul id="menu">

				<li><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>">Home<span>The starting point</span></a></li>
				<li><a href="index.html">Browse<span>Browse pages</span></a></li>
				<li><a href="index.html">Search<span>Search the exhibit</span></a></li>
				<li><a href="index.html">About<span>About this exhibit</span></a></li>
				<li><a href="index.html">Contact<span>Contact the creators</span></a></li>
			</ul>

			<div class="clear"></div>
		</div>
	</div>
	
	
	<div class="container">
								
				<?php echo flash(); ?>	
				
		