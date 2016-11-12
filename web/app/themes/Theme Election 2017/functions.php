<?php
// Custom post types init
include_once('inc/custom_post_types.php');
// roles init
include_once('inc/roles.php');
// styles script init
// include_once('inc/scripts_styles.php');
// theme support
// include_once('inc/theme_support.php');


add_shortcode('commentaire', "function_commentaire_shortcode" ); 

function function_commentaire_shortcode($attr){
  $attr = shortcode_atts( array(
        'content' => 'Contenu par défaut',
        'id' => '123' // id par défaut
    ), $attr);
  
  return '<!-- commentaire '.$attr['id'].' : '.$attr['content'].'-->';
}