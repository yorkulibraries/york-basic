<?php 
    $exhibit = get_current_record('exhibit', false);
    $sections = get_exhibit_sections($exhibit);
?>

<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>
	
<div id="breadcrumb">		
	<span><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>">Home</a> » <?php echo metadata('item', array('Dublin Core', 'Title')); ?> </span>
</div>

<div class="span-16">
	<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>
  	
  	<p><?php echo metadata('item', array('Dublin Core', 'Description')); ?></p>
  	
    <!-- The following returns all of the files associated with an item. -->
    <?php if (metadata('item', 'has files')): ?>
    <div id="itemfiles" class="element">
        <?php if (get_theme_option('Item FileGallery') == 1): ?>
        <div class="element-text"><?php echo item_image_gallery(); ?></div>
        <?php else: ?>
        <div class="element-text"><?php echo files_for_item(); ?></div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <div class="clear"></div>
    
    <div class="spacer"></div>    

    <ul class="jq_simple_tabs">
        <li><a href="#tab1">Description</a></li>
        <li><a href="#tab2">Dublin Core</a></li>
        <li><a href="#tab3">Cite</a></li>
    </ul>

    <div class="jq_simple_tab_container">
        <div id="tab1" class="jq_simple_tab_content">
            <h3>Description</h3>
            <?php echo metadata('item', array('Dublin Core', 'Description')); ?>
        
            <h3>Subject</h3>
            <?php echo metadata('item', array('Dublin Core', 'Subject')); ?>
        
            <h3>Date</h3>
            <?php echo metadata('item', array('Dublin Core', 'Date')); ?>
        
            <h3>All Titles</h3>
            <ul>
                <?php foreach (metadata('item', array('Dublin Core', 'Title'), array('all' => true)) as $title): ?>
                    <li class="item-title"><?php echo $title; ?></li>
                <?php endforeach ?>
            </ul>
        </div>

        <div id="tab2" class="jq_simple_tab_content">
            <?php echo all_element_texts('item'); ?>
        </div>

        <div id="tab3" class="jq_simple_tab_content">
            <h3>Citation</h3>
            <div id="citation-value" class="field-value"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
        </div>
    </div>

    <div class="spacer"></div>
	
    <script type="text/javascript">
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

<!--
    <div class="box">
        <h5>Pages</h5>
        <?php echo exhibit_builder_page_nav(); ?>
    </div>
-->
</div>


<?php echo foot(); ?>
