<?php 
$exhibit_page = get_current_record('exhibit_page', false);
$exhibit = $exhibit_page->getExhibit();
$section = $exhibit_page->parent_id ? $exhibit_page->getParent() : $exhibit_page;
$current_page = $exhibit_page->parent_id ? $exhibit_page : $exhibit_page->getFirstChildPage(); 
$sections = get_exhibit_sections($exhibit);
set_current_record('exhibit_page', $current_page);
?>

<?php echo head(array('bodyclass' => 'exhibits', 'title' => $exhibit->title)); ?>

<div id="breadcrumb">		
	<span><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>">Home</a> » <?php echo html_escape($section->title); ?> </span>
</div>

<div class="span-16">
	<h2><?= html_escape($section->title) ?></h2>
	<h4><?= strip_tags($section->description) ?></h4>

	<?php exhibit_builder_render_exhibit_page($current_page); ?>	

	<div class="clear" style="padding-top: 10px;"></div>
	
	<?php echo exhibit_builder_link_to_previous_page("&larr; Previous Page", array(), $current_page); ?>
    <?php echo exhibit_builder_link_to_next_page("Next Page &rarr;", array(), $current_page); ?>

    <script>
        var idcomments_acct = 'ff00f3485d8f5fea3ca2e5450ac86e49';
        var idcomments_post_id;
        var idcomments_post_url;
    </script>
    <span id="IDCommentsPostTitle" style="display:none"></span>
    <script type="text/javascript" src="http://www.intensedebate.com/js/genericCommentWrapperV2.js"></script>

</div>
<div class="span-8 last">
	
	<div class="box">
		<h5>Sections</h5>
		 <ul id="exhibit_sections" class="box-list">
	    	<?php foreach($sections as $section): ?>			

	           <?php if (!is_numeric($section->title)): ?>
	             <li><a class="exhibit_section" href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></li>	
				<?php endif; ?>         
			<?php endforeach; ?>
	    </ul>
	</div>
	
	<div class="box">
		<h5>Pages</h5>
		<?php echo pages_in_section_nav($current_page); ?>
	</div>
</div>

<?php echo foot(); ?>
