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

function new_post_type(){
	register_post_type(
		'topics',
		array(
			'label' => 'トピックス',
			'public'=> true,
			'hierarchical'=> false,
			'has_archive' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt'
				),
			'menu_position'=>5
		)
	);

	register_taxonomy(
		'topicscat',
		'topics',
		array(
			'label'=>'トピックスカテゴリー',
			'public'=>true,
			'hierarchical'=>true
			)
	);
};
add_action('init', 'new_post_type');

?>