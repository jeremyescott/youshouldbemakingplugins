<?php
/*
Plugin Name: Custom Shortcodes for Site
Plugin URI: http://jeremyescott.com/
Description: A custom theme to add shortcodes to my site.
Author: WCPHX 2016
Version: 1.0
Author URI: http://jeremyescott.com/
*/

// Add Shortcode, 
function wcphx2016_emphasize_shortcode( $atts , $content = null ) {
	if ( $content )
		return '<em>' . $content . '</em>';
}
add_shortcode( 'emphasize_this', 'wcphx2016_emphasize_shortcode' );

// Add Other Shortcode, from the old twentyfifiteen child
function wcphx2016_loud_shortcode( $atts , $content = null ) {
	if ( $content )
		return '<strong style="text-transform:uppercase">' . $content . '</strong>';
}
add_shortcode( 'say_it_loud', 'wcphx2016_loud_shortcode' );
