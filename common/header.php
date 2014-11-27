<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if ( $description = option('description')): ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php endif; ?>

<?php
if (isset($title)) {
    $titleParts[] = strip_formatting($title);
}
$titleParts[] = option('site_title');
?>
<title><?php echo implode(' &middot; ', $titleParts); ?></title>

<?php echo auto_discovery_link_tags(); ?>

<!-- Plugin Stuff -->
<?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

<!-- Stylesheets -->
<?php 
  queue_css_file("blueprint/screen");
  queue_css_file("theme");
  queue_css_file("slider");
  echo head_css();
  echo theme_header_background();
?>

<!-- javascript -->
<?php
  queue_js_file('js/jquery.min');
  queue_js_file('js/tabs');
  queue_js_file('js/slider');
  echo head_js();
?>

</head>
<body>
    <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
	
	 <div id="header">
		<div class="container">
			<div id="logo">
			    <?php echo exhibit_logo(get_current_record('exhibit', false)); ?>
	        </div>

			<ul id="menu">
				<li><a href="<?php echo exhibit_builder_exhibit_uri(); ?>">Home<span>The starting point</span></a></li>
				<li><a href="<?php echo exhibit_builder_exhibit_uri(); ?>?action=browse">Browse<span>Browse pages</span></a></li>
				<!-- li><a href="<?php echo exhibit_builder_exhibit_uri(); ?>?action=search">Search<span>Search the exhibit</span></a></li -->
				<li><a href="<?php echo exhibit_builder_exhibit_uri(); ?>/about/">About<span>About this exhibit</span></a></li>
				<li><a href="<?php echo exhibit_builder_exhibit_uri(); ?>/contact/">Contact<span>Contact the creators</span></a></li>
			</ul>

			<div class="clear"></div>
		</div>
	</div>
	
	<div class="container">		
	    <?php echo flash(); ?>	
