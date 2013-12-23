<div id="sidebar">
	<?php if(is_active_sidebar(2)): ?>
	<?php dynamic_sidebar(2); ?>
	<?php endif; ?>
	<div class="side-nav">
		<h2><img src="<?php bloginfo('template_url'); ?>/images/side_ttl_color.gif" alt="PRODUCTS COLOR"></h2>
		<?php wp_tag_cloud('smallest=1&largest=1&unit=em&format=list'); ?>
	</div>
	<div class="side-nav">
		<h2><img src="<?php bloginfo('template_url'); ?>/images/side_ttl_topics.gif" alt="TOPICS"></h2>
		<ul>
			<?php wp_list_categories(array('title_li'=>'', 'taxonomy'=>'topicscat')); ?>
		</ul>
	</div>
	<ul id="bnr">
		<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/side-bnr001.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/side-bnr002.jpg" alt=""></a></li>
		<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/side-bnr003.jpg" alt=""></a></li>
	</ul>
</div>