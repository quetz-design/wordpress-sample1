<?php
register_nav_menus(array('nav' => 'ナビゲーション'));

register_sidebar(array(
	'before_widget'=>'<div class="breadcrumbs">',
	'after_widget'=>'</div>',
	'name'=>'パンくずリスト'
	));

?>