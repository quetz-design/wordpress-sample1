<div id="products" class="box">
	<div class="section-header">
		<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" alt=""></h2>
	</div>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="product-left">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/images/noimages.gif" alt="">
			<?php endif; ?>
		</div>
		<div class="product-right">
			<div class="product-title">
				<h3><?php the_title(); ?></h3>
				<p><?php echo post_custom('価格'); ?></p>
			</div>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
</div>
<div class="box">
	<span class="fLeft"><?php previous_post_link('&laquo; %link', '前の情報を見る', TRUE); ?></span>
	<span class="fRight"><?php next_post_link('%link &raquo;', '次の情報を見る', TRUE) ?></span>
</div>