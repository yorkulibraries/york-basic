<?php exhibit_builder_exhibit_head(array('bodyclass' => 'exhibits')); ?>
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/tabs')); ?>" />
<div id="breadcrumb">		
	<span><a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>">Home</a> » <a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?= html_escape($section->title) ?></a> » <?php echo item('Dublin Core', 'Title'); ?></span>
</div>	

<div class="span-16">
	<h1><?php echo item('Dublin Core', 'Title'); ?></h1>
  	<p><?php echo item('Dublin Core', 'Description'); ?></p>
	<div id="itemfiles">
		<?php echo display_files_for_item(); ?>
	</div>
    
	<ul class="jq_simple_tabs">
           <li><a href="#tab1">Description</a></li>
           <li><a href="#tab2">Dublin Core</a></li>
           <li><a href="#tab3">Cite</a></li>
       </ul>
	<div class="clear"></div>
	 <div class="jq_simple_tab_container">
            <div id="tab1" class="jq_simple_tab_content">

                <h3>Description</h3>
                <?php echo item('Dublin Core', 'Description'); ?>
                <h3>Subject</h3>
                <?php echo item('Dublin Core', 'Subject'); ?>
                <h3>Date</h3>
                <?php echo item('Dublin Core', 'Date'); ?>

                <h3>All Titles</h3>
                <ul>
                <?php foreach (item('Dublin Core', 'Title', 'all') as $title): ?>
               <li class="item-title">
               <?php echo $title; ?>
               </li>
                 <?php endforeach ?>
                </ul>


            </div>
            <div id="tab2" class="jq_simple_tab_content">

              <?php echo show_item_metadata(); ?>
            </div>
            <div id="tab3" class="jq_simple_tab_content">

                <h3>Citation</h3>
                <div id="citation-value" class="field-value"><?php echo item_citation(); ?></div>
            </div>
      </div>
	
	
	<script type="text/javascript">
	var idcomments_acct = 'ff00f3485d8f5fea3ca2e5450ac86e49';
	var idcomments_post_id;
	var idcomments_post_url;
	</script>
	<span id="IDCommentsPostTitle" style="display:none"></span>
	<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>
		
</div>

<div class="span-8 last">		
	

		<div class="box">
			<h5>Sections</h5>
			 <ul id="exhibit_sections" class="box-list">
		    	<?php foreach($exhibit->Sections as $section): ?>			

		           <?php if (!is_numeric($section->title)): ?>
		             <li><a class="exhibit_section" href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></li>	
					<?php endif; ?>         
				<?php endforeach; ?>
		    </ul>
		</div>
		
		<div class="box">
			<h5>Pages</h5>
			<?php echo exhibit_builder_page_nav(); ?>
		</div>
</div>


<?php exhibit_builder_exhibit_foot(); ?>