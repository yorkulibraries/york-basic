<?php 
    $exhibit = get_current_record('exhibit', false); 
    $sections = get_exhibit_sections($exhibit);
    $featuredImages = get_records('Item', array('tags' => $exhibit->slug . "-featured-image"), 4);
    $browse = (isset($_REQUEST['action']) && $_REQUEST['action'] == 'browse');
?>

<?php echo head(array('bodyclass' => 'exhibits', 'title' => $exhibit->title)); ?>

<br/>

<?php if (!$browse): ?>
 	
    <h2>Featured Images</h2>
	
    <div id="slider">
    	<div id="slider_images">
    		<ul>
    			<?php foreach ($featuredImages as $item): ?>
    				<li><?php echo link_to_item(item_image('square_thumbnail', array('width' => '300px', 'height' => '300px'), 0, $item), array(), 'show', $item); ?></li>
    			<?php endforeach; ?>
    		</ul>
    	</div>
    	<div id="slider_navigation">
    		<ul>
    			<?php foreach ($featuredImages as $item): ?>
    				<li>
    				    <?php echo item_image('square_thumbnail', array('width' => '40px', 'height' => '40px'), 0, $item); ?>
    					<div class="block">
    						<h2><?php echo metadata($item, array('Dublin Core', 'Title')); ?></h2>
    						<span><?php echo metadata($item, array('Dublin Core', 'Title')); ?></span>
    					</div>
    				</li>
    			<?php endforeach; ?>
    		</ul>
    	</div>
    </div>
	
    <hr/>

    <h1><?php echo $exhibit->title ?></h1>

    <p><?php echo $exhibit->description; ?></p>
<?php endif; ?>


<div class="span-16">
    <?php if ($browse): ?>
        <h1>Browse <?php echo $exhibit->title ?> Exhibit</h1>
    <?php else: ?>
	    <h3>Exhibit Sections</h3>
	<?php endif; ?>
	
	<div id="exhibit-sections">	
		<?php foreach($sections as $section): ?>
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

<?php echo foot(); ?>
