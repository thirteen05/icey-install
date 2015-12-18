<?php

// Register Bootstrap Navigation Walker

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

//Enqueue Stylesheet for Custom WordPress Login 

add_action('init', 'enqueue_custom_login_css');

function enqueue_custom_login_css(){
  
  wp_enqueue_style('custom-admin-stylesheet', get_template_directory_uri().'/css/custom-wp-login.css');
  
}

?>