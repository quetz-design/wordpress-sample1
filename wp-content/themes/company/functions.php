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

function new_scripts() {
	wp_enqueue_script( 'jquery');
	wp_enqueue_script(
		'base',
		get_template_directory_uri().'/base.js',
		array('jquery')
		);
}
add_action('wp_enqueue_scripts', 'new_scripts');

define('NO_HEADER_TEXT', true);
define('HEADER_IMAGE', '%s/images/gra_main.jpg');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADRE_IMAGE_HEIGHT', 300);

add_custom_image_header('', 'admin_header_style');
function admin_header_style() {
	?>
	<style>
		#headimg {
			width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
			height:<?php echo HEADER_IMAGE_HEIGHT; ?>px;
		}
	</style>
	<?php
}

register_default_headers(array(
	'header_evening' => array(
		'url' => '%s/images/gra_main2.jpg',
		'thumbnail_url' => '%s/images/gra_main2_thum.jpg'
	),
	'header_night' => array(
		'url' => '%s/images/gra_main3.jpg',
		'thumbnail_url' => '%s/images/gra_main3_thum.jpg'
	)
));

register_sidebar(array(
	'before_widget'=>'<div class="free-space">',
	'after_widget'=>'</div>',
	'before_title'=>'<h2>',
	'after_title'=>'</h2>',
	'name'=>'サイトからのお知らせ'
));

add_theme_support('post-formats', array('gallery', 'image', 'status'));

function remove_gallery_style() {
	return '<div class="gallery">';
}
add_filter('gallery_style', 'remove_gallery_style');

?>