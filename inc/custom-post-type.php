<?php

// ACF THEME OPTION
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     	=> 'Theme General Settings',
        'menu_title'    	=> 'Theme Option',
        'menu_slug'     	=> 'theme-general-settings',
        'capability'    	=> 'edit_posts',
        'redirect'        	=> false
	));
	// acf_add_options_sub_page(array(
    //     'page_title'     => 'Theme Ultimate Balance at Aore Town Settings',
    //     'menu_title'    => 'Redefining Luxury',
    //     'parent_slug'    => 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
    //     'page_title'     => 'Theme Ultimate Balance at Aore Town Settings',
    //     'menu_title'    => 'Ultimate Balance at Aore Town',
    //     'parent_slug'    => 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
    //     'page_title'     => 'Theme Residences Settings',
    //     'menu_title'    => 'Residences',
    //     'parent_slug'    => 'theme-general-settings',
    // ));

	// acf_add_options_sub_page(array(
    //     'page_title'     => 'Theme News & Blogs Settings',
    //     'menu_title'    => 'News & Blogs',
    //     'parent_slug'    => 'theme-general-settings',
	// ));
	acf_add_options_sub_page(array(
        'page_title'     	=> 'Theme Sections Title Settings',
        'menu_title'    	=> 'Sections Title',
        'parent_slug'    	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    	=> 'Theme Header Settings',
        'menu_title'    	=> 'Header',
        'parent_slug'    	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    	=> 'Theme Footer Settings',
        'menu_title'    	=> 'Footer',
        'parent_slug'    	=> 'theme-general-settings',
    ));

}



//* Custom Post Type *//

// Custom Post Type for Testimonial backend
function aorePartners_custom_post_type() {
	$labels =array(
		'name' 				=> 'Partner',
		'singular_name' 	=> 'Partner',
		'add_new' 			=> 'Add Partners',
		'all_items' 		=> 'All Partners Logos',
		'add_new_item' 		=> 'Add New Logo',
		'edit_item' 		=> 'Edit Item',
		'new_item' 			=> 'New Item', 
		'view_item' 		=> 'View Item',
		'search_item' 		=> 'Search Partner Logo',
		'not_found' 		=> 'No items Found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Perent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('partner',$args);

}
add_action('init','aorePartners_custom_post_type');

// Custom Post Type for Testimonial backend
function aoreTestimonials_custom_post_type() {
	$labels =array(
		'name' 					=> 'Testimonial',
		'singular_name' 		=> 'Testimonial',
		'add_new' 				=> 'Add Testimonial',
		'all_items' 			=> 'All Testimonials',
		'add_new_item'			=> 'Add New',
		'edit_item' 			=> 'Edit Testimonial',
		'new_item' 				=> 'New Testimonial', 
		'view_item' 			=> 'View Testimonial',
		'search_item' 			=> 'Search Testimonial',
		'not_found' 			=> 'No Testimonial Found',
		'not_found_in_trash' 	=> 'No Testimonial found in trash',
		'parent_item_colon'		=> 'Perent Item'
	);
	$args = array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'has_archive' 			=> true,
		'publicly_queryable'	=> true,
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'post',
		'hierarchical' 			=> false,
		'menu_icon' 			=> 'dashicons-testimonial',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 8,
		'exclude_from_search' => false
	);
	register_post_type('Testimonial',$args);

}
add_action('init','aoreTestimonials_custom_post_type');

// Custom Post Type for Residences backend
function aoreResidences_custom_post_type() {
	$labels =array(
		'name'					=> 'Residence',
		'singular_name' 		=> 'Residence',
		'add_new' 				=> 'Add Residence',
		'all_items' 			=> 'All Residences',
		'add_new_item' 			=> 'Add New',
		'edit_item' 			=> 'Edit Residence',
		'new_item' 				=> 'New Residences', 
		'view_item'				=> 'View Residences',
		'search_item' 			=> 'Search Residences',
		'not_found'				=> 'No Residences Found',
		'not_found_in_trash' 	=> 'No Residences found in trash',
		'parent_item_colon'		=> 'Perent Item'
	);
	$args = array(
		'labels'				=> $labels,
		'public' 				=> true,
		'has_archive' 			=> true,
		'publicly_queryable'	=> true,
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'post',
		'hierarchical' 			=> false,
		'menu_icon' 			=> 'dashicons-admin-multisite',
		'supports'				=> array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 9,
		'exclude_from_search' => false
	);
	register_post_type('Residences',$args );

}
add_action('init','aoreResidences_custom_post_type');


// Custom Post Type for Contact Us backend
function contact_custom_post_type() {
	$labels = array (
		'name'				=> 'Contacts',
		'singular_name' 	=> 'Contact',
		'menu_name'			=> 'Contacts',
		'name_admin_bar' 	=> 'Contact'
	);
	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type' 	=> 'post',
		'hierarchical'		=> false,
		'menu_position' 	=> 5,
		'menu_icon' 		=> 'dashicons-email-alt',
		'supports' 			=> array(
							'title',
							'editor',
							'author',
							'excerpt',
							// 'thumbnail',
							'revisions',
		                     ),
	);
	register_post_type ('aore-contact',$args );
}
add_action('init','contact_custom_post_type');

// Add the custom columns to the Messages post type:
add_filter( 'manage_aore-contact_posts_columns', 'aore_set_contact_columns' );

function aore_set_contact_columns( $columns ) {
	$newColumns = array();
	$newColumns['title'] = 'Name';
	// $newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['phone'] = 'Phone';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

// Add the data to the custom columns for the Messages post type:
add_action('manage_aore-contact_posts_custom_column', 'aore_contact_custom_column', 10, 2 );
function aore_contact_custom_column( $column, $post_id ) {

	switch ( $column ) {

		// case 'message' ;
		// 	//message column
		// echo get_the_excerpt();
		// 	break;

		case 'email' ;
			//email column
			// echo 'test@gmail.com';
			$email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:'. $email .'">'. $email .'</a>';
			break;

	   case 'phone' ;
			//contact numbre column
			// echo '0912345678910';
			$phone = get_post_meta( $post_id, '_contact_phone_value_key', true );
			 echo '<a href="mailto:'. $phone .'">'. $phone .'</a>';
			break;
	}
	
}

/* Contact Meta Boxes*/

function aore_contact_add_meta_box() {
	add_meta_box( 'contact_email', 'User Email', 'aore_contact_email_callback', 'aore-contact');
	add_meta_box( 'contact_Phone', 'User Phone', 'aore_contact_phone_callback', 'aore-contact' );
}

//Email==========================================
function aore_contact_email_callback( $post ) {
	wp_nonce_field('aore_save_email_data', 'aore_contact_email_meta_box_nonce');

	$valueEmail = get_post_meta($post->ID, '_contact_email_value_key', true );

	echo '<label for="aore_contact_email_field">User Email Address: </lable> ';
	echo '<input type"email" id="aore_contact_email_field" name="aore_contact_email_field" value="'. esc_attr( $valueEmail ).'" size="25" />';
}

//Phone===========================================
function aore_contact_phone_callback( $post ) {
	wp_nonce_field('aore_save_phone_data', 'aore_contact_phone_meta_box_nonce');

	$valuephone = get_post_meta($post->ID, '_contact_phone_value_key', true );

	echo '<label for="aore_contact_phone_field">User Phone Number: </lable> ';
	echo '<input type"phone" id="aore_contact_phone_field" name="aore_contact_phone_field" value="'. esc_attr( $valuephone ).'" size="25" />';
}

add_action('add_meta_boxes', 'aore_contact_add_meta_box' );

//Email==========================================
function aore_save_email_data( $post_id ) {

	if( ! isset( $_POST['aore_contact_email_meta_box_nonce'] ) ) {
		return;
	}
	if( ! wp_verify_nonce( $_POST['aore_contact_email_meta_box_nonce'], 'aore_save_email_data') ) {
		return;
	}
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if( ! isset( $_POST['aore_contact_email_field'] ) ) {
		return;
	}
	
	$my_email_data = sanitize_text_field( $_POST['aore_contact_email_field'] );
	
	update_post_meta( $post_id, '_contact_email_value_key', $my_email_data );
	
}
add_action('save_post', 'aore_save_email_data');



//Phone===========================================
function aore_save_phone_data( $post_id ) {

	if( ! isset( $_POST['aore_contact_phone_meta_box_nonce'] ) ) {
		return;
	}
	if( ! wp_verify_nonce( $_POST['aore_contact_phone_meta_box_nonce'], 'aore_save_phone_data') ) {
		return;
	}
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if( ! isset( $_POST['aore_contact_phone_field'] ) ) {
		return;
	}
	
	$my_phone_data = sanitize_text_field( $_POST['aore_contact_phone_field'] );
	
	update_post_meta( $post_id, '_contact_phone_value_key', $my_phone_data );
	
}
add_action('save_post', 'aore_save_phone_data');




