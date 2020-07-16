<<?php

function cptui_register_my_taxes() {

/**
 * Taxonomy: Formateurs.
 */

$labels = [
    "name" => __( "Formateurs", "mytheme" ),
    "singular_name" => __( "Formateur", "mytheme" ),
    "menu_name" => __( "Formateurs", "mytheme" ),
    "all_items" => __( "All Formateurs", "mytheme" ),
    "edit_item" => __( "Edit Formateur", "mytheme" ),
    "view_item" => __( "View Formateur", "mytheme" ),
    "update_item" => __( "Update Formateur name", "mytheme" ),
    "add_new_item" => __( "Add new Formateur", "mytheme" ),
    "new_item_name" => __( "New Formateur name", "mytheme" ),
    "parent_item" => __( "Parent Formateur", "mytheme" ),
    "parent_item_colon" => __( "Parent Formateur:", "mytheme" ),
    "search_items" => __( "Search Formateurs", "mytheme" ),
    "popular_items" => __( "Popular Formateurs", "mytheme" ),
    "separate_items_with_commas" => __( "Separate Formateurs with commas", "mytheme" ),
    "add_or_remove_items" => __( "Add or remove Formateurs", "mytheme" ),
    "choose_from_most_used" => __( "Choose from the most used Formateurs", "mytheme" ),
    "not_found" => __( "No Formateurs found", "mytheme" ),
    "no_terms" => __( "No Formateurs", "mytheme" ),
    "items_list_navigation" => __( "Formateurs list navigation", "mytheme" ),
    "items_list" => __( "Formateurs list", "mytheme" ),
];

$args = [
    "label" => __( "Formateurs", "mytheme" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'formateur', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "formateur",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "formateur", [ "collaborateurs" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


function cptui_register_my_cpts_formations() {

	/**
	 * Post Type: Formations.
	 */

	$labels = [
		"name" => __( "Formations", "mytheme" ),
		"singular_name" => __( "Formation", "mytheme" ),
		"menu_name" => __( "Mes Formations", "mytheme" ),
		"all_items" => __( "All Formations", "mytheme" ),
		"add_new" => __( "Add new", "mytheme" ),
		"add_new_item" => __( "Add new formation", "mytheme" ),
		"edit_item" => __( "Edit formation", "mytheme" ),
		"new_item" => __( "New formation", "mytheme" ),
		"view_item" => __( "View formation", "mytheme" ),
		"view_items" => __( "View Formations", "mytheme" ),
		"search_items" => __( "Search Formations", "mytheme" ),
		"not_found" => __( "No Formations found", "mytheme" ),
		"not_found_in_trash" => __( "No Formations found in trash", "mytheme" ),
		"parent" => __( "Parent formation:", "mytheme" ),
		"featured_image" => __( "Featured image for this formation", "mytheme" ),
		"set_featured_image" => __( "Set featured image for this formation", "mytheme" ),
		"remove_featured_image" => __( "Remove featured image for this formation", "mytheme" ),
		"use_featured_image" => __( "Use as featured image for this formation", "mytheme" ),
		"archives" => __( "formation archives", "mytheme" ),
		"insert_into_item" => __( "Insert into formation", "mytheme" ),
		"uploaded_to_this_item" => __( "Upload to this formation", "mytheme" ),
		"filter_items_list" => __( "Filter Formations list", "mytheme" ),
		"items_list_navigation" => __( "Formations list navigation", "mytheme" ),
		"items_list" => __( "Formations list", "mytheme" ),
		"attributes" => __( "Formations attributes", "mytheme" ),
		"name_admin_bar" => __( "formation", "mytheme" ),
		"item_published" => __( "formation published", "mytheme" ),
		"item_published_privately" => __( "formation published privately.", "mytheme" ),
		"item_reverted_to_draft" => __( "formation reverted to draft.", "mytheme" ),
		"item_scheduled" => __( "formation scheduled", "mytheme" ),
		"item_updated" => __( "formation updated.", "mytheme" ),
		"parent_item_colon" => __( "Parent formation:", "mytheme" ),
	];

	$args = [
		"label" => __( "Formations", "mytheme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "formations", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "formations", $args );
}

add_action( 'init', 'cptui_register_my_cpts_formations' );

