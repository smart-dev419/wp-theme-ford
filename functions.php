<?php

require( 'theme-config.php' );  


/**
 * Customize the classes added to next/prev post links
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="btn btn-load"';
}



/**
 * Adds the ability for v-card to be uploaded to media uploader.  Add additional mime types here as needed.
 */
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    // add your extension to the array
    $existing_mimes['vcf'] = 'text/x-vcard';
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}

/**
 *  add page or post name to body class
 */
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


/**
 * class for customizing sub nav
 */
class WPSE_KEW_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='drop'><ul>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}

/**
 *  hide admin bar
 */
add_filter('show_admin_bar', '__return_false');


function custom_read_more() {
    return ' &nbsp; <a href="'.get_permalink(get_the_ID()).'">Read More</a>';
}
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, custom_read_more());
}
