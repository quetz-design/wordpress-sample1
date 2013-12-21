<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div id="sitemap" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url');?>/images/ttl_sitemap.gif" alt="SITE MAP"></h2>
			</div>
			<div class="sitemap-inner">
				<h3>サイトマップ</h3>
				<?php wp_nav_menu(array('theme_location'=>'sitemap'));?>
			</div>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>