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

?>