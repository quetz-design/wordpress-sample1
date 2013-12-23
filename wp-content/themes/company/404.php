<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div class="box">
			<img src="<?php bloginfo('template_url'); ?>/images/not_found.gif" alt="NOT FOUND">
			<p>お探しのページは見つかりませんでした</p>
			<p><a href="<?php bloginfo('url'); ?>">トップページへ戻る</a></p>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>