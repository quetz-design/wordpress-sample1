<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url');?>/images/ttl_search.gif" alt="SEARCH"></h2>
			</div><?php if(have_posts()): ?>
			<h3>検索結果：「<?php the_search_query(); ?>」</h3>
			<ul><?php while(have_posts()): the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>[<?php the_time('Y/m/d') ?>]</span></li><?php endwhile; ?>
			</ul><?php else: ?>
			<h3>「<span><?php the_search_query(); ?></span>」の検索結果は見つかりませんでした。</h3>
			<p>別のキーワードでお試しください</p><?php get_search_form(); ?><?php endif; ?>
		</div><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div><?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>