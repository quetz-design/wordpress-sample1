<?php get_header(); ?>

<div id="container">
	<div id="contents">
		<div id="news" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_news.gif" alt="NEWS"></h2>
			</div>
			<?php if(have_posts()): ?>
			<dl>
				<?php while(have_posts()): the_post(); ?>
				<dt><?php the_time('Y/m/d'); ?></dt>
				<?php
					$cats = the_category();
					$cats = $cats[0];
				?>
				<dd class="<?php $cats->category_nicename ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></dd>
				<?php endwhile; ?>
			</dl>
			<?php endif; ?>
		</div>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>