<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="<?php bloginfo('html_type') ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
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
			</div>
		</div>
		<div id="header-nav"><?php wp_nav_menu(array('theme_location' => 'nav')); ?></div>
		<div id="header-gra">
			<?php if(is_home()): ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_main.jpg" alt="">
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/images/gra_news.jpg" alt="">
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- /header -->
<?php dynamic_sidebar(); ?>