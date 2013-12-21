<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div id="company" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url');?>/images/ttl_company.gif" alt="COMPANY"></h2>
			</div>
			<div class="box-inner"><?php if(have_posts()): while(have_posts()): the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_content();?>
			<?php endwhile; endif; ?>
			</div>
		</div>

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
					$catslug = $cats->slug;
					if($catslug == 'info'):
				?>
				<dd class="info">
				<?php else: ?>
				<dd class="seminar">
				<?php endif; ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></dd>
				<?php endwhile; ?>
			</dl>
			<?php endif; wp_reset_query(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>