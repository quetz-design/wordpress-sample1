<?php get_header(); ?>

<div id="container">
	<div id="contents">

		<div id="original-products" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url') ?>/images/ttl_original_products.gif" alt=""></h2>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/images/item_products.jpg" alt="" class="items-img">
			<div class="items-detail">
				<h3><img src="<?php bloginfo('template_url'); ?>/images/ttl_confidence.gif" alt="確かな自信"></h3>
				<p><img src="<?php bloginfo('template_url')?>/images/products_text.gif" alt=""></p>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			</div>
		</div>

		<div id="products" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" alt="PRODUCTS"></h2>
			</div>
			<?php 
				$catId = get_query_var( 'cat' );
				$children = get_terms( 'category', array( 'child_of'=>$catId, 'fields'=>'ids'));

				foreach ($children as $child):
					query_posts('cat='.$child.'&posts_per_page=4');
			?>
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
			<?php endif; wp_reset_query(); ?>
		<?php endforeach; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>