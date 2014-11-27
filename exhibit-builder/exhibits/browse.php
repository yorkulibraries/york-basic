<?php head(array('page_title' => 'Welcome')); ?>	

	<h1>Browse <?php echo $exhibit->title ?> Exhibit</h1>
	
	<div class="span-16">		
		<div id="exhibit-sections">	
			<?php foreach($exhibit->Sections as $section): ?>
			<h4><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></h4>
			<p><?php echo $section->description; ?></p>
			<?php endforeach; ?>
		</div>

	</div>
	<div class="span-8 last">
		<div id="exhibit-credits" class="box">	
		</div>
	</div>

<?php foot(); ?>
