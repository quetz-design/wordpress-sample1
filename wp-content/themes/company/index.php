<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<?php 
			$pickup = array(
				'category_name'=>'news',
				'post_per_page' =>2,
				'post__in'=>get_option('sticky_posts'));
			query_posts($pickup);
		?>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="box pick-up">
			<?php
					$cats = get_the_category();
					$cats = $cats[0];
			?>
			<h2 class="pick-<?php echo $cats->category_nicename; ?>"><img src="<?php bloginfo('template_url'); ?>/images/ttl_pick_news.gif" alt=""></h2>
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail(); ?>
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/images/pickup.gif" alt="PICKUP">
			<?php endif; ?>
			<div class="pickup-inner">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<span><?php the_time('Y/m/d'); ?></span><?php the_excerpt(); ?>
			</div>
		</div>
		<?php endwhile; endif; wp_reset_query(); ?>

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
				<dd class="<?php echo $cats->category_nicename; ?>"><a href="<?php the_permalink(); ?>" <?php if(has_post_format('gallery')) echo 'class="photo"' ?>><?php the_title(); ?></a><?php the_excerpt(); ?></dd>
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

		<div id="topics" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_topics.gif" alt="TOPICS"></h2>
				<p><a href="<?php bloginfo('url'); ?>/topics/">一覧を見る</a></p>
			</div>
		<?php query_posts('post_type=topics&posts_per_page=2'); ?>
		<?php if(have_posts()): ?>
			<ul class="item-lists">
				<?php while(have_posts()): the_post(); ?>
				<li>
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					<?php else: ?>
						<img src="<?php bloginfo('template_url');?>/images/thum_topics_noimage.gif" alt="NO IMAGE">
					<?php endif; ?>
					<span><?php the_time('Y/m/d'); ?></span>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<p class="term-link"><?php echo get_the_term_list($post->ID, 'topicscat', 'Category: ','・',''); ?></p>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; wp_reset_query(); ?>
		</div>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>