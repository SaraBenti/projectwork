<?php
//creiamo una categoria di blocchi
add_filter('block_categories_all', function ($categories) {


	// Adding a new category after Design Blocks.
	$custom_categories[] = array(
		'slug' => 'immaginificio',
		'title' => 'Immaginificio',
		'icon' => ''
	);
	array_splice($categories, 3, 0, $custom_categories);

	return $categories;
});
//le categorie dei blocchi vengono restituite come un array

require __DIR__ . '/example-01-basic/index.php';
require __DIR__ . '/example-02-stylesheets/index.php';
require __DIR__ . '/example-06-jsx/index.php';