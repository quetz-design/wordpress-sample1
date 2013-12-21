<?php
register_nav_menus(array('nav' => 'ナビゲーション'));

register_sidebar(array(
	'before_widget'=>'<div class="breadcrumbs">',
	'after_widget'=>'</div>',
	'name'=>'パンくずリスト'
	));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 110, 110, true );

register_nav_menus(array('nav'=>'ナビゲーション', 'sitemap'=>'サイトマップ'));

?>