<?php
/*
* Plugin Name: A11y Links by Tim Wright
* Plugin URI: https://github.com/timwright12/PHP-content-a11y-links
* Description: Search a content block (string or object) with PHP to look for any links that open in a new window which need a "new window" icon to be accessible
* Version: 0.1
* Author: Tim Wright, @csskarma
* Author URI: http://www.csskarma.com
*/

include 'lib/simple_html_dom.php';

function filter_A11yLinks ( $content ) {
  
    $content = str_get_html( $content );
  
  foreach( $content->find( 'a' ) as $element ) {
    
    if( $element->target === '_blank' ) {
      $element->innertext .= ' <span class="a11y-icon-new-window"><img src="' . plugin_dir_url( __FILE__ ) . 'assets/images/new-window.svg" alt="This link opens in a new window"></span>';
    }
    
  } // foreach
  
  $content->save();
  
  return $content;
  
}

add_filter( 'the_content', 'filter_A11yLinks' );
