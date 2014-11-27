<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $ex = exhibit_builder_get_current_exhibit(); ?>
<title><?php 
echo $ex->title; ?> | <?php echo settings('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Stylesheets -->
<?php 
  queue_css("blueprint/screen");
  queue_css("theme");
  queue_css("slider");
  display_css();
?>

<!-- javascript -->

<?php
  queue_js('js/jquery.min');
  queue_js('js/tabs');
  queue_js('js/slider');
  display_js();
?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

</head>
<body>
	
	 <div id="header">
		<div class="container">
			<div id="logo">
					<?php $items = get_items(array('tags' => $ex->slug . "-logo"), 1);  
						if (count($items) == 0):
					?>
					<img src="<?php echo html_escape(img('default_logo.png')); ?>"></a>
					<?php else:
						echo item_fullsize(array(), array(), $items[0]); 							
					endif; ?>
	        </div>

			<ul id="menu">

				<li><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>">Home<span>The starting point</span></a></li>
				<li><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>?action=browse">Browse<span>Browse pages</span></a></li>
				<!-- li><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>?action=search">Search<span>Search the exhibit</span></a></li -->
				<li><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>/about/">About<span>About this exhibit</span></a></li>
				<li><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>/contact/">Contact<span>Contact the creators</span></a></li>
			</ul>

			<div class="clear"></div>
		</div>
	</div>
	
	
	<div class="container">
								
				<?php echo flash(); ?>	
