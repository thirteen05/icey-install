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

add_theme_support( 'post-thumbnails' ); 

/* BLOG PAGINATION */

function pagination($pages = '', $range = 4) {  
	$showitems = ($range * 2)+1;  

	global $paged;

	if(empty($paged)) $paged = 1;

	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}   

	if(1 != $pages) {
	 for ($i=1; $i <= $pages; $i++) {
		     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
		         echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
		     }
		 }
	}
}

/* CUSTOM READ MORE ... */

function new_excerpt_more($more) {
       global $post;
	return '<span class="excerptmore">...</span>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>