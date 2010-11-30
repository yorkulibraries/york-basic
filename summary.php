<?php 
if ($_REQUEST["action"] == "browse" || $_REQUEST["action"] == "search") {
	$action = $_REQUEST["action"];
 	include EXHIBIT_THEMES_DIR . "/".$exhibit->theme."/$action.php";
	exit;
} 
?>

<?php exhibit_builder_exhibit_head(array('page_title' => 'Welcome')); ?>	

	<?php	
		$items = get_items(array('tags' => $exhibit->slug . "-featured-image"), 4); 
		set_items_for_loop($items);
	?>	
	<br/>
	<h2>Featured Slider Images</h2>
	<div id="slider">
		<div id="slider_images">
			<ul>
				<?php while(loop_items()): ?>
					<li><?php echo link_to_item(item_square_thumbnail(array('width' => '300px'))); ?></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div id="slider_navigation">
			<ul>
				<?php while(loop_items()): ?>
					<li><?php echo item_square_thumbnail(array('width' => '40px')); ?>
						<div class="block">
							<h2><?php echo item('Dublin Core', 'Title'); ?></h2>
							<span><?php echo item('Dublin Core', 'Title'); ?></span>
						</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
	<hr/>
	
	<h2>Featured Images</h2>
	<div id="featured_images">
	<?php	
		while(loop_items()):
				if (item_has_thumbnail()):
	?>
 	       		<div class="image-box">
					<?php echo link_to_item(item_square_thumbnail(array('width' => '195px') )); ?>
					<div class="title"><?php echo item('Dublin Core', 'Title'); ?></div>
				</div>
 	  			
	<?php endif; endwhile; ?>
	</div>
	<div class="clear"></div>
	
	<h1><?php echo $exhibit->title ?></h1>
	<p><?php echo $exhibit->description; ?></p>
	
	<div class="span-16">
		<h3>Exhibit Sections</h3>
		<div id="exhibit-sections">	
			<?php foreach($exhibit->Sections as $section): ?>
			<h4><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></h4>
			<p><?php echo $section->description; ?></p>
			<?php endforeach; ?>
		</div>

	</div>
	<div class="span-8 last">
		<div id="exhibit-credits" class="box">	
			<h5>Credits</h5>
			<div class="box-content">
				<p><?php echo html_escape($exhibit->credits); ?></p>
			</div>
		</div>
	</div>

<?php exhibit_builder_exhibit_foot(); ?>