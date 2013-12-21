<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div id="news" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_news.gif" alt=""></h2>
				<p><a href="<?php bloginfo('url'); ?>">一覧を見る</a></p>
			</div>
			<?php query_posts('category_name=news&posts_per_page=5' ); ?>
			<?php if(have_posts()): ?>
			<dl>
				<?php while(have_posts()): the_post(); ?>
				<dt><?php the_time('Y/m/d'); ?></dt>
				<?php
					$cats = get_the_category();
					$cats = $cats[0];
				?>
				<dd class="<?php echo $cats->category_nicename; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></dd>
				<?php endwhile; ?>
			</dl>
			<?php endif; wp_reset_query(); ?>
		</div>
		<div id="products" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_products.gif" alt="PRODUCTS"></h2>
				<p><a href="<?php bloginfo('url'); ?>/products/">一覧を見る</a></p>
			</div>
		<?php query_posts('category_name=products&posts_per_page=4'); ?>
		<?php if(have_posts()): ?>
			<ul class="item-lists">
				<?php while(have_posts()): the_post(); ?>
				<li>
					<span class="type">
					<?php $cats = get_the_category(); $cats = $cats[0]; ?>
					<img src="<?php bloginfo('template_url'); ?>/images/icon_<?php echo $cats->category_nicename ?>.png" alt="">
					</span>
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="<?php bloginfo('template_url');?>/images/thum_noimage.gif" alt="NO IMAGE">
					<?php endif; ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo post_custom('価格'); ?></p>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; wp_reset_query(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>