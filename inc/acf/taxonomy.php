<?php
add_action( 'init', function() {
	register_taxonomy( 'kategori-tema', array(
	0 => 'tema',
), array(
	'labels' => array(
		'name' => 'Kategori Tema',
		'singular_name' => 'Kategori Tema',
		'menu_name' => 'Kategori Tema',
		'all_items' => 'All Kategori Tema',
		'edit_item' => 'Edit Kategori Tema',
		'view_item' => 'View Kategori Tema',
		'update_item' => 'Update Kategori Tema',
		'add_new_item' => 'Add New Kategori Tema',
		'new_item_name' => 'New Kategori Tema Name',
		'search_items' => 'Search Kategori Tema',
		'popular_items' => 'Popular Kategori Tema',
		'separate_items_with_commas' => 'Separate kategori tema with commas',
		'add_or_remove_items' => 'Add or remove kategori tema',
		'choose_from_most_used' => 'Choose from the most used kategori tema',
		'not_found' => 'No kategori tema found',
		'no_terms' => 'No kategori tema',
		'items_list_navigation' => 'Kategori Tema list navigation',
		'items_list' => 'Kategori Tema list',
		'back_to_items' => '← Go to kategori tema',
		'item_link' => 'Kategori Tema Link',
		'item_link_description' => 'A link to a kategori tema',
	),
	'public' => true,
	'show_in_menu' => true,
	'show_in_rest' => true,
) );
} );

