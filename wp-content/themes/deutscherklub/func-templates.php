<?php

function custom_template_query($template) {

	global $post;
	global $wp_query;

/*	$template_query['agenda'] = array(
		'posts_per_page' => 5,
		'cat' => 5
	);*/

	$template_query['noticias'] = array(
		'posts_per_page' => 10,
		'cat' => 1,
		'order' => 'DESC'
	);

/*	$template_query['noticias-home'] = array(
		'posts_per_page' => 3,
		'cat' => 6,
		'order' => 'DESC'
	);*/

	$page = array(
	 	'paged' => get_query_var('paged')
	);

	$args = array_merge($template_query[$template], $page);

	// pretty_dump($args);

	$query = new wp_query($args);

	return $query;
}