<?php

add_action('wp_enqueue_scripts', 'default_banner_scripts');
function default_banner_scripts()
{
  // if( ! is_single( 75 ) ) {
	// 	return;
	// }

  wp_register_script( 'banner-js', plugins_url( '../js/main.js', __FILE__ ) );
  wp_enqueue_script( 'banner-js', '', array( 'jquery' ), false, true );

  wp_register_style( 'banner-lib', plugins_url( '../style/banner_lib.css', __FILE__ ), array(), '', 'all' );
  wp_enqueue_style( 'banner-lib' );
  wp_register_style( 'banner-style', plugins_url( '../style/banner_style.css', __FILE__ ), array(), '', 'all' );
  wp_enqueue_style( 'banner-style' );

}
