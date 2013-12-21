<?php get_header(); ?>

<div id="container">
	<div id="contents">
		<div id="products" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" alt="PRODUCTS"></h2>
			</div>

			<?php if(have_posts()): ?>
				<ul class="item-lists">
					<?php while(have_posts()): the_post(); ?>
						<li>
							<span class="type">
								<?php
									$cats = get_the_category();
									$cats = $cats[0];
								?>
								<img src="<?php bloginfo('template_url'); ?>/images/icon_<?php echo $cats->category_nicename; ?>.png">
							</span>
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php bloginfo('template_url'); ?>/images/thum_noimage.gif" alt="NO IMAGE">
							<?php endif; ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo post_custom('価格'); ?></p>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php the_category(); ?>
			<?php endif; ?>
		</div>
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>