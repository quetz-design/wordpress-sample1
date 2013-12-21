<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div id="news" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_news.gif" alt=""></h2>
			</div>
			<?php if(have_posts()): ?>
			<div class="box-inner">
				<?php while(have_posts()): the_post(); ?>
				<?php
					$cat = get_the_category();
					$cat = $cat[0];
				?>
				<h3><span class="ttl-<?php echo $cats->category_nicename ?>"><?php the_title(); ?></span></h3>
				<p class="data">更新日：<?php the_time(); ?></p>
				<?php the_content(); ?>
				<?php endwhile ?>
			</div>
			<?php endif; ?>
		</div>
		<div class="box">
			<span class="fLeft"><?php previous_post_link('&laquo; %link', '前の情報を見る', TRUE); ?></span>
			<span class="fRight"><?php next_post_link('%link &raquo;', '次の情報を見る', TRUE) ?></span>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>