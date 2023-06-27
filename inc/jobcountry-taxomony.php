<?php 


function hjb_country_taxomony(){

	$labels = array(
		'name'                       => _x( 'Country', 'Taxonomy General Name', 'hello-job-board' ),
		'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'hello-job-board' ),
		'menu_name'                  => __( 'Countries', 'hello-job-board' ),
		'all_items'                  => __( 'All Countries', 'hello-job-board' ),
		'parent_item'                => __( 'Parent Country', 'hello-job-board' ),
		'parent_item_colon'          => __( 'Parent Country:', 'hello-job-board' ),
		'new_item_name'              => __( 'New Country Name', 'hello-job-board' ),
		'add_new_item'               => __( 'Add Country', 'hello-job-board' ),
		'edit_item'                  => __( 'Edit Country', 'hello-job-board' ),
		'update_item'                => __( 'Update Country', 'hello-job-board' ),
		'view_item'                  => __( 'View Country', 'hello-job-board' ),
		'separate_items_with_commas' => __( 'Separate Countries with commas', 'hello-job-board' ),
		'add_or_remove_items'        => __( 'Add or remove countries', 'hello-job-board' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'hello-job-board' ),
		'popular_items'              => __( 'Popular Countries', 'hello-job-board' ),
		'search_items'               => __( 'Search Countries', 'hello-job-board' ),
		'not_found'                  => __( 'Not Found', 'hello-job-board' ),
		'no_terms'                   => __( 'No Countries', 'hello-job-board' ),
		'items_list'                 => __( 'Countries list', 'hello-job-board' ),
		'items_list_navigation'      => __( 'Countries list navigation', 'hello-job-board' ),
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_tagcloud'              => true,
        'rewrite'                    => true,
	);
	register_taxonomy( 'job-country', array( 'hello-job' ), $args );

}
add_action('init','hjb_country_taxomony',10);