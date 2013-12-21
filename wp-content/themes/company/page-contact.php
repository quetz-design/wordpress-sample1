<?php get_header(); ?>
<div id="container">
	<div id="contents">
		<div id="contact" class="box">
			<div class="section-header">
				<h2><img src="<?php bloginfo('template_url');?>/images/ttl_contact.gif" alt="CONTACT"></h2>
			</div>
			<div class="box-inner"><?php if(have_posts()): while(have_posts()): the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_content();?>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>