<?php
// Custom post types init
include_once('inc/custom_post_types.php');
// roles init
include_once('inc/roles.php');
// taxonomies init
include_once('inc/taxonomies.php');
// activate thumbnail
add_theme_support( 'post-thumbnails' );


add_shortcode('commentaire', "function_commentaire_shortcode" ); 

function function_commentaire_shortcode($attr){
  $attr = shortcode_atts( array(
        'content' => 'Contenu par défaut',
        'id' => '123' // id par défaut
    ), $attr);
  
  return '<!-- commentaire '.$attr['id'].' : '.$attr['content'].'-->';
}

// Remove admin bar when logged
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

//Register our sidebars and widgetized areas.
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

