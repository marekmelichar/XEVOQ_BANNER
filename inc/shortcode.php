<?php

add_shortcode( 'banner', 'xevoq_banner_shortcode' );
function xevoq_banner_shortcode( $atts ) {

  $atts = shortcode_atts( array(
    'banner_id' => 'banner-slideshow',
    'banner_class' => '',
    'banner_slide_class' => 'slide'
  ), $atts );

  $media = get_attached_media( 'image' );

  if ( !$media ) {
    return '';
  }

  // create the html
  $html .= '<div id="'. esc_attr($atts['banner_id']) .'">';
  foreach ( $media as $img ) {
    // $html .= '<img src="'. esc_url( wp_get_attachment_image_url($img->ID, 'full') ) .'" alt="'. esc_attr( $img->post_title ) .'" >';
    $html .= '<div id="banner-slideshow-image" style="background-image: url('. esc_url( wp_get_attachment_image_url($img->ID, 'full') ) .')" alt="'. esc_attr( $img->post_title ) .'" ></div>';
  }
  $html .= '</div>';


  return $html;
}


//
// <!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
// <div class="slideshow">
//   <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/nature/1600x1400')"></div>
//   <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/buildings/1600x1400')"></div>
//   <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/food/1600x1400')"></div>
//   <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/technology/1600x1400')"></div>
// </div>
//











// add_shortcode( 'banner', 'xevoq_banner_shortcode' );
// function xevoq_banner_shortcode( $atts ) {
//
//   $atts = shortcode_atts( array(
//     'banner_id' => 'banner-slideshow',
//     'banner_class' => '',
//     'banner_slide_class' => 'slide'
//   ), $atts );
//
//   $media = get_attached_media( 'image' );
//
//   if ( !$media ) {
//     return '';
//   }
//
//   // create the html
//   $html .= '<div id="'. esc_attr($atts['banner_id']) .'">';
//     $html .= '<ul class="'. esc_attr($atts['banner_class']) .'">';
//   foreach ( $media as $img ) {
//     $html .= '<li class="'. esc_attr( $atts['banner_slide_class'] ) .'">';
//     $html .= '<img src="'. esc_url( wp_get_attachment_image_url($img->ID, 'full') ) .'" alt="'. esc_attr( $img->post_title ) .'" >';
//     $html .= '</li>';
//   }
//     $html .= '</ul>';
//   $html .= '</div>';
//
//
//   return $html;
// }
