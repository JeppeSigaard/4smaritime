<?php 

add_action( 'init', 'smamo_add_widget_tax', 0 );

function smamo_add_widget_tax() {
	$labels = array(
		'name'              => _x( 'Widgetområder', 'taxonomy general name' ),
		'singular_name'     => _x( 'Widgetområde', 'taxonomy singular name' ),
		'search_items'      => __( 'Søg i Widgetområder' ),
		'all_items'         => __( 'Alle Widgetområder' ),
		'parent_item'       => __( 'Forælder' ),
		'parent_item_colon' => __( 'Forælder:' ),
		'edit_item'         => __( 'Rediger widgetområde' ),
		'update_item'       => __( 'Opdater widgetområde' ),
		'add_new_item'      => __( 'Tilføj nyt widgetområde' ),
		'new_item_name'     => __( 'Nyt widgetområde' ),
		'menu_name'         => __( 'Widgets' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tax_widget' ),
	);

	register_taxonomy( 'tax_widget', array( 'post','page' ), $args );

}