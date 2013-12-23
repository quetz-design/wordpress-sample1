<!doctype html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="<?php bloginfo('html_type') ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- header -->
<div id="header">
	<div id="header-inner">
		<div id="header-top">
			<div class="fLeft">
				<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('name'); ?>"></a>
				</h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
			<div class="fRight">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/sitemap/" class="sitemap">サイトマップ</a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" class="rss">RSS FEED</a></li>
				</ul>
				<?php get_search_form(); ?>
			</div>
		</div>
		<div id="header-nav"><?php wp_nav_menu(array('theme_location' => 'nav')); ?></div>
		<div id="header-gra">
			<?php if(is_home() || is_404()): ?>
				<img src="<?php header_image(); ?>" alt="">
			<?php elseif(is_search()): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_search.jpg" alt="">
			<?php elseif(is_category(array('products', 'products_a', 'products_b', 'products_c', 'products_d'))||in_category(array('products_a', 'products_b', 'products_c', 'products_d'))): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_products.jpg" alt="">
			<?php elseif(is_page(array('company', 'access'))): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_company.jpg" alt="">
			<?php elseif(is_page('contact')): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_contact.jpg" alt="">
			<?php elseif(is_page('sitemap')): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_sitemap.jpg" alt="">
			<?php elseif(is_post_type_archive('topics')): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_topics.jpg" alt="">
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_news.jpg" alt="">
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- /header -->
<?php dynamic_sidebar(); ?>