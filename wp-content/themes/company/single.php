<?php get_header(); ?>
<div id="container">
	<div id="contents">

		<?php if(in_category('info') || in_category('seminar')): ?>
			<?php get_template_part('sgl', 'news'); ?>
		<?php else: ?>
			<?php get_template_part('sgl', 'products'); ?>
		<?php endif; ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>