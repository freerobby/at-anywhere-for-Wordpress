<?php
/*
Plugin Name:  @anywhere for Wordpress
Plugin URI:   http://freerobby.com/at-anywhere-for-wordpress
Description:  Integrates Twitter's @anywhere service into your Wordpress blog
Version:      1.0
Author:       Robby Grossman
Author URI:   http://freerobby.com
License:      MIT
*/

// Create our plugin options page.
add_action('admin_menu', 'my_plugin_menu');
function my_plugin_menu() {
  add_options_page('Configure @anywhere for Wordpress', 'Configure @anywhere', 'administrator', 'atanywhereoptions', 'at_anywhere_options'); 
}
function at_anywhere_options() {
  require('at-anywhere-for-wordpress-options.php');
}

// Add @anywhere Javascript to page
add_action( 'wp_head', 'generate_at_anywhere_scripts' );
function generate_at_anywhere_scripts() {
  $key = get_option('aa_api_key');
  $my_str = "<script src=\"http://platform.twitter.com/anywhere.js?id=$key&v=1\">"
    . "</script>"
    . "<script type=\"text/javascript\">"
    . "  twttr.anywhere(function(twitter) {"
    . "    twitter.hovercards();"
    . "  });"
    . "</script>";
  
  echo $my_str;
}

?>