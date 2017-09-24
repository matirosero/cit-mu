<?php
/**
Plugin Name: MR Register Custom Post Types
Plugin URI: http://matilderosero.com
Description: Register custom post types and taxonomies.
Author: Matilde Rosero
Author URI: http://matilderosero.com
Version: 0.1.0
Text Domain: mr-register-cpt
*/

// load_plugin_textdomain('mr-register-cpt', false, __DIR__ . '/languages' );

// function load_plugin_textdomain()
// {
// load_textdomain('mr-register-cpt', WPMU_PLUGIN_DIR . '/' .plugin_basename( dirname( __FILE__ ) ) . '/languages/mr-register-cpt' . get_locale() . '.mo');
// }
// add_action('muplugins_loaded', 'load_plugin_textdomain');


add_action( 'init', 'register_my_post_types' );
function register_my_post_types() {


	/*
	 * Affiliate
	 */
	register_post_type( 'cit_affiliate', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Affiliates', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Affiliate', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Affiliates', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Affiliate', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Affiliate', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Affiliate', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Affiliate', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Affiliates', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No affiliates found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No affiliates found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Affiliate items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Alliances
	 */
	register_post_type( 'cit_alliances', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Alliances', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Alliance', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Alliances', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Alliance', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Alliance', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Alliance', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Alliance', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Alliances', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No alliances found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No alliances found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Alliance items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Archive
	 */
	register_post_type( 'cit_archive', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Archives', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Archive', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Archives', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Archive', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Archive', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Archive', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Archive', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Archives', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No archives found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No archives found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Archive items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Unknown
	 */
	register_post_type( 'cit_unknown', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Unknowns', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Unknown', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Unknowns', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Unknown', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Unknown', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Unknown', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Unknown', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Unknowns', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No unknowns found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No unknowns found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Unknown items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Board Members
	 */
	register_post_type( 'cit_board_members', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Board members', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Board member', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Board members', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Board member', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Board member', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Board member', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Board member', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Board members', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No board members found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No board members found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Board member items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Past events
	 */
	register_post_type( 'cit_past_event', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Past events', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Past event', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Past events', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Past event', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Past event', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Past event', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Past event', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Past events', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No past events found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No past events found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Past event items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Profile
	 */
	register_post_type( 'cit_profile', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Profiles', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Profile', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Profiles', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Profile', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Profile', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Profile', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Profile', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Profiles', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No profiles found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No profiles found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Profile items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Testimonial
	 */
	register_post_type( 'cit_testimonials', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Testimonials', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Testimonial', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Testimonials', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Testimonial', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Testimonial', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Testimonial', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Testimonial', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Testimonials', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No testimonials found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No testimonials found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Testimonial items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */


	/*
	 * Report
	 */
	register_post_type( 'cit_report', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Reports', 'mr-register-cpt'), /* This is the Title of the Group */
				'singular_name' => __('Report', 'mr-register-cpt'), /* This is the individual type */
				'all_items' => __('All Reports', 'mr-register-cpt'), /* the all items menu item */
				'add_new' => __('Add New', 'mr-register-cpt'), /* The add new menu item */
				'add_new_item' => __('Add New Report', 'mr-register-cpt'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mr-register-cpt' ), /* Edit Dialog */
				'edit_item' => __('Edit Report', 'mr-register-cpt'), /* Edit Display Title */
				'new_item' => __('New Report', 'mr-register-cpt'), /* New Display Title */
				'view_item' => __('View Report', 'mr-register-cpt'), /* View Display Title */
				'search_items' => __('Search Reports', 'mr-register-cpt'), /* Search Custom Type Title */
				'not_found' =>  __('No reports found', 'mr-register-cpt'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No reports found in Trash', 'mr-register-cpt'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Report items', 'mr-register-cpt' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> false, /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			// 'taxonomies' => array('Alliance_tag'),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */

}